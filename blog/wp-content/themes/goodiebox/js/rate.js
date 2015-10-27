var RatingBoxWidget = function(container) {

    var $data = this.extend(this.$data, {
        URL: {
            getRating: 'http://keret.life.hu/rating/getrating',
            getRatingList: 'http://keret.life.hu/rating/getratinglist',
            setRating: 'http://keret.life.hu/rating/setrating'
        },
        queryResult: null,
        cikkID: '',
        highestRating: 0,
        cikkRatingGeneral: '0',
        cikkRatingUser: '',
        kuki: '',
        ratingList: [],
        ratingIconSelectors: {
            '5': '.rate_tetszik',
            '4': '.rate_imadom',
            '3': '.rate_wtf',
            '2': '.rate_nemtetszik',
            '1': '.rate_aaaneee'
        },
        ratingCSSSelectors: {
            '5': 'tetszik',
            '4': 'imadom',
            '3': 'wtf',
            '2': 'nemtetszik',
            '1': 'aaaneee'
        }
    });

    var $elements = this.extend(this.$elements, {
        cikkRating: $('#article-rate'),
        ratingBox: container
    });

    var $templates = this.extend(this.$templates, {
        notYetRated: 'Értékeld elsõként!',
        getRatingParameters: '?url={{cikkID}}&cookie={{kuki}}',
        getRatingListParameters: '?rating={{cikkRatingUser}}&limit=3',
        setRatingParameters: '?url={{cikkID}}&cookie={{kuki}}&rating={{cikkRatingUser}}',
        ratingIcons: {
            '5': '<div class="rate_icon rate_tetszik" title="TETSZIK!"></div>',
            '4': '<div class="rate_icon rate_imadom" title="IMÁDOM!"></div>',
            '3': '<div class="rate_icon rate_wtf" title="WTF!"></div>',
            '2': '<div class="rate_icon rate_nemtetszik" title="NEM TETSZIK!"></div>',
            '1': '<div class="rate_icon rate_aaaneee" title="ÁÁÁ NEEE!"></div>'
        },
        ratingButtons: '<span>Te mit gondolsz a hírrõl?</span> <div class="overflow right rating_icons"> <div class="col left"> <div title="TETSZIK!" data-rating="5" class="rate_icon rate_tetszik"></div><div class="num">0</div> </div> <div class="col left"> <div title="IMÁDOM!" data-rating="4" class="rate_icon rate_imadom"></div><div class="num">0</div> </div> <div class="col left"> <div title="WTF!" data-rating="3" class="rate_icon rate_wtf"></div><div class="num">0</div> </div> <div class="col left"> <div title="NEM TETSZIK!" data-rating="2" class="rate_icon rate_nemtetszik"></div><div class="num">0</div> </div> <div class="col left"> <div title="ÁÁÁ NEEE!" data-rating="1" class="rate_icon rate_aaaneee"></div><div class="num">0</div> </div> </div>',
        ratingList: '<div id="rating_kapcs_arrow"> <span class="triangle_up triangle_{{ratingCSSSelector}}"></span> </div> <div class="rating_kapcsolodo"> <div class="text">Még több hír a kategóriában:</div> <ul class="triangle_list"> {{#ratingList}} <li><a href="{{cikk_url}}" title="{{cikk_title}}">{{cikk_title}}</a></li> {{/ratingList}} </ul> <a href="/legek/index.html?rating={{rating}}" class="more">Még több cikk a kategóriában</a> </div>'
    });

    var $methods = this.extend(this.$methods, {
        getRating: function() {
            $.ajax({
                url: $data.URL.getRating + $methods.renderString($templates.getRatingParameters, $data),
                dataType: 'jsonp'
            }).done(function(data) {
                $data.queryResult = data;
                $methods.updateView();
            });
        },
        setRating: function(rating) {
            $data.cikkRatingUser = rating;

            if (!$data.kuki) {
                $data.kuki = Math.floor((new Date()).getTime() * Math.random());
                $.cookie('ratingCookie', $data.kuki, { expires: new Date('9999/12/31'), path: '/'});
            }
            $.ajax({
                url: $data.URL.setRating + $methods.renderString($templates.setRatingParameters, $data),
                dataType: 'jsonp'
            }).done(function(data) {
                $data.queryResult = data;
                if ($data.queryResult.success) {
                    $methods.updateView();
                }
            });
        },
        updateRateIcon: function() {
            if (!$data.queryResult) { return; }

            // if (!Number($data.queryResult.ret.userrating)) {
            if ($data.queryResult.ret.ratings == '0') {
                $elements.cikkRating.html($templates.notYetRated);
            } else {
                for (var i = 0, len = $data.queryResult.ret.ratings.length; i < len; i++) {
                    if(Number($data.queryResult.ret.ratings[i].cnt) > $data.highestRating) {
                        $data.cikkRatingGeneral = $data.queryResult.ret.ratings[i].rating;
                        $data.highestRating = Number($data.queryResult.ret.ratings[i].cnt);
                    }
                }
                $methods.render($elements.cikkRating, $templates.ratingIcons[$data.cikkRatingGeneral], $data);
            }
        },
        updateRateNumbers: function() {
            if ($data.queryResult.ret) {
                for (var i = 0, len = $data.queryResult.ret.ratings.length; i < len; i++) {
                    if ($data.queryResult.ret.ratings[i].cnt) {
                        $elements.ratingBox.find($data.ratingIconSelectors[$data.queryResult.ret.ratings[i].rating] + ' + .num').html($data.queryResult.ret.ratings[i].cnt);
                    }
                }
            }
        },
        getSimilarRatedArticles: function() {
            $.ajax({
                url: $data.URL.getRatingList + $methods.renderString($templates.getRatingListParameters, $data),
                dataType: 'jsonp'
            }).done(function(data) {
                for (var i in data.ret.ratinglist[$data.cikkRatingUser]) {
                    $data.ratingList.push(data.ret.ratinglist[$data.cikkRatingUser][i].info);
                }

                $elements.ratingBox.append($methods.renderString($templates.ratingList, {ratingList: $data.ratingList, ratingCSSSelector: $data.ratingCSSSelectors[$data.cikkRatingUser], rating: $data.cikkRatingUser }));
            });
        },
        updateRateBox: function() {
            $elements.ratingBox.empty();
            $elements.ratingBox.append($methods.renderString($templates.ratingButtons, $data));

            if (!$data.queryResult.ret) { return; }

            if (Number($data.queryResult.ret.userrating)) {
                $data.cikkRatingUser = Number($data.queryResult.ret.userrating);
            }

            if ($data.cikkRatingUser) {
                $elements.ratingBox.addClass('rating_icons_inactive');
                $elements.ratingBox.find($data.ratingIconSelectors[$data.cikkRatingUser]).addClass('selected');
                $methods.updateRateNumbers();
                $methods.getSimilarRatedArticles();
            }
        },
        updateView: function() {
            $methods.updateRateIcon();
            $methods.updateRateBox();
        }
    });

    // INIT
    $data.cikkID = location.pathname.replace(/.*\/(.*)\.html/g,'$1');
    $data.kuki = $.cookie('ratingCookie');
    $elements.ratingBox.one('click', '.rate_icon', function(e) {
        if (!$data.cikkRatingUser) {
            $elements.ratingBox.addClass('rating_icons_inactive');
            $methods.setRating($(this).data('rating'));
        }
    });
    $methods.getRating();
};
RatingBoxWidget.prototype = new LifeWidget();
RatingBoxWidget.prototype.constructor = RatingBoxWidget;

$(function() {

    var ratingBoxWidget = new RatingBoxWidget($('#rating'));

});
