<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Users\Site\Controller;

use Joomla\Component\Users\Administrator\Controller\CallbackController as AdminCallbackController;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Multi-factor Authentication plugins' AJAX callback controller
 *
 * @since 4.2.0
 */
class CallbackController extends AdminCallbackController
{
}
