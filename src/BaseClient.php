<?php

namespace Yougile;

trait BaseClient{

    /**
     * @return mixed
     */
    public function get_list($query = NULL){
        if (is_array($query) || is_object($query)) {
            return $this->request(self::$res . '?' . http_build_query($query), 'GET');
        } else {
            return $this->request(self::$res , 'GET');
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get_by_id($id){
        return $this->request(self::$res . '/' . $id, 'GET');
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params){
        return $this->request( self::$res , 'POST', $params);
    }

    /**
     * @param $id
     * @param $params
     * @return mixed
     */
    public function update($id, $params){
        return $this->request(self::$res . '/' . $id, 'PUT', $params);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id){
        return $this->request(self::$res . '/' . $id, 'DELETE');
    }

}