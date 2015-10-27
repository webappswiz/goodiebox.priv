<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Új privát üzeneted érkezett - "<?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>"

Kedves <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>!

A "<?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" oldalon új privát üzenetet kaptál, melynek feladója "<?php echo (isset($this->_rootref['AUTHOR_NAME'])) ? $this->_rootref['AUTHOR_NAME'] : ''; ?>". Az üzenet témája:
<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>


A következő linkre kattintva tekintheted meg az érkezett üzenetet:

<?php echo (isset($this->_rootref['U_VIEW_MESSAGE'])) ? $this->_rootref['U_VIEW_MESSAGE'] : ''; ?>


Ezt az e-mailt azért kapod, mert beállítottad, hogy privát üzenet érkezéséről értesülni szeretnél. Ne felejtsd el, hogy bármikor kikapcsolhatod az ilyen értesítéseket a felhasználói vezérlőpultban.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>