<?php
class SystemController extends AppController {
	public $components = array('Flash', 'RequestHandler', 'Session');

	public function reboot() {

		exec('sudo bash /home/pi/read-only.sh && sudo /sbin/shutdown -r +1');

		$this->Flash->success(__('Reboot initiated, please reload this page in 2 minutes.'));
		$this->redirect(array('controller' => 'status', 'action' => 'index'));
	}

	public function shutdown() {

		exec('sudo /sbin/shutdown -h +1');

		$this->Flash->success(__('Shutdown initiated, goodbye.'));
		$this->redirect(array('controller' => 'status', 'action' => 'index'));
	}

}
?>
