<?php
App::uses('AppModel', 'Model');
/**
 * Search Model
 *
 */
class Search extends AppModel {
      public $actsAs = array('Search.Searchable');
      
      public  $useTable = 'users';
      
      public $filterArgs = array(
            array('username' => 'username', 'type' => 'like', 'method' => 'filterName'),
            //array('username' => 'pr_status', 'type' => 'value'),
             //'username' => array('type' => 'like', 'field' => array('User.username', 'UserInfo.first_name'))
      );
      
      public function filterName($data, $field = null) {
            if (empty($data['username'])) {
                  return array();
            }
            $nameField = '%' . $data['username'] . '%';
            return array(
            'OR' => array(
                  $this->alias . '.username LIKE' => $nameField,
            ));
      }
      
      // Built a list of search options (unless you have this list somewhere else)
      public function __construct($id = false, $table = null, $ds = null) {
            $this->statuses = array(
                  '' => __('All', true),
                  0 => __('Bid', true),
                  1 => __('Cancelled', true),
                  2 => __('Approved', true),
                  3 => __('On Setup', true),
                  4 => __('Field', true),
                  5 => __('Closed', true),
                  6 => __('Other', true));
            parent::__construct($id, $table, $ds);
      }
}