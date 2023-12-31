<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'RequestHandler',
        'Session',
    'Auth'=>array(
            'loginRedirect'=>array(
                'controller'=>'users',
                'action'=>'index'
            ),
            'logoutRedirect'=>array(
                'controller'=>'users',
                'action'=>'login'
            ),
            'authenticate'=>array(
                'Form'=>array(
                    'passwordHasher'=>'Blowfish'
                )
            ),
            'authorize' => array('Controller'),
            'authError'=> false   
        )
    );

    public function isAuthorized($user)
    {
        if(isset($user['user_role']) && $user['user_role'] === 'ADMIN')
        {
            return true;
        }
        $this->Session->setFlash('<script> M.toast({html: "¡Acceso denegado!"}); M.toast({html: "Consulte al soporte técnico para más información"}); </script>');

        return false;
    }
    
    public function beforeFilter()
    {
        $this->Auth->allow('login','logout');
        $this->set('current_user',$this->Auth->user());
    }
}
