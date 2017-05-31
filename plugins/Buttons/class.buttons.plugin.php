<?php if (!defined('APPLICATION')) exit();

/**
 * Buttons Plugin
 * 
 * @author Mark O'Sullivan <mark@vanillaforums.com>
 * @copyright 2003 Vanilla Forums, Inc
 * @license http://www.opensource.org/licenses/gpl-2.0.php GPL
 */

class ButtonsPlugin extends Gdn_Plugin {

   public function Base_Render_Before($Sender) {
      if ($Sender->MasterView == '' || $Sender->MasterView == 'default')
         $Sender->AddCssFile('buttons.css', 'plugins/Buttons');
   }

   public function Setup() {}

   public function Structure() {}

}
