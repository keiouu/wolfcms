<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2011 Martijn van der Kleijn <martijn.niji@gmail.com>
 *
 * This file is part of Wolf CMS. Wolf CMS is licensed under the GNU GPLv3 license.
 * Please see license.txt for the full license text.
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 * The FileManager allows users to upload and manipulate files.
 *
 * @package Plugins
 * @subpackage file_manager
 *
 * @author Martijn van der Kleijn <martijn.niji@gmail.com>
 * @copyright Martijn van der Kleijn, 2011
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

if (Dispatcher::getAction() != 'view'): ?>

<p class="button"><a href="#create-file-popup" class="popupLink"><img src="<?php echo ICONS_URI; ?>add-page-32.png" align="middle" alt="page icon" /> <?php echo __('Create new file'); ?></a></p>
<p class="button"><a href="#create-directory-popup" class="popupLink"><img src="<?php echo ICONS_URI; ?>add-folder-32.png" align="middle" alt="dir icon" /> <?php echo __('Create new directory'); ?></a></p>
<p class="button"><a href="#upload-file-popup" class="popupLink"><img src="<?php echo ICONS_URI; ?>upload-32.png" align="middle" alt="upload icon" /><?php echo __('Upload file'); ?></a></p>

<?php endif; ?>