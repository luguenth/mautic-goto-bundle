<?php
/**
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

/** @var array $event */
?>

<li class="wrapper citrix-event">
	<div class="figure"><span class="fa fa-video-camera"></span></div>
	<div class="panel">
	    <div class="panel-body">
	    	<h3>
	    		<?php echo $view->escape($event['eventLabel']); ?>
			</h3>
            <p class="mb-0">
				<?php 
				echo $view->escape($view['translator']->trans('mautic.core.timeline.event.time', array(
					'%date%' => $view['date']->toFullConcat($event['timestamp']), 
					'%event%' => $event['eventLabel']
				))); 
				?>
			</p>
	    </div>
		<div class="panel-footer">
			<p>
				<?php echo $view->escape($event['extra']['eventName']) ?>
			</p>
		</div>
	</div>
</li>