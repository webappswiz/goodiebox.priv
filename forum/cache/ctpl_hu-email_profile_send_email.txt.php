<?php if (!defined('IN_PHPBB')) exit; ?>Kedves <?php echo (isset($this->_rootref['TO_USERNAME'])) ? $this->_rootref['TO_USERNAME'] : ''; ?>!

A következő üzenetet a "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" fórumról <?php echo (isset($this->_rootref['FROM_USERNAME'])) ? $this->_rootref['FROM_USERNAME'] : ''; ?> küldte neked. Amennyiben ez az üzenet kéretlen, illetve számodra sértő vagy egyéb támadó megjegyzést tartalmaz, kérünk, lépj kapcsolatba az oldal adminisztrátorával a következő e-mail címen:

<?php echo (isset($this->_rootref['BOARD_CONTACT'])) ? $this->_rootref['BOARD_CONTACT'] : ''; ?>


A levélhez mellékeld ezt az üzenetet (különösen ügyelve a fejlécre). Ennek a levélnek a válaszcíme <?php echo (isset($this->_rootref['FROM_USERNAME'])) ? $this->_rootref['FROM_USERNAME'] : ''; ?> e-mail címére van beállítva, így a választ ő kapja meg.

Az üzenet a következő:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

<?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?>