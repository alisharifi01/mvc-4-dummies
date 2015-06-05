<?php

interface DBHandler {
    public function open();
    public function close();
    public function execute($sqlQuery, $params = null);
    public function getAll($sqlQuery, $params = null);
    public function getRow($sqlQuery, $params = null);
    public function getOne($sqlQuery, $params = null);
} 