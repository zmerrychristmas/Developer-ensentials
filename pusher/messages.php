<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
	      'cluster' => 'ap1',
	          'encrypted' => true
		    );
    $pusher = new Pusher\Pusher(
	        '8e863cb7d9efcfa9b3a9',
		    '1cc432707d219ffa83e0',
		        '534891',
			    $options
			      );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);
?>
