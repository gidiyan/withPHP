<?php

class Guestbook extends Model
{
    protected static $table = 'guestbook';
    protected static $pk = 'id';
    protected static $filter = 'approved';
}