<?php

namespace app\models;

class Challenge extends BaseModel
{

    static $connection = "default";
    static $table = "challenges";
    static $fields = [
        'id', 'name', 'setnr', 'week',
        'background', 'gods', 'species',
        'conduct_1', 'conduct_2', 'conduct_3', 'bonus_1', 'bonus_2',
        'created'
    ];
     static $relations = [
        'submissions' => ['type' => 'belongs_to', 'class' => Submission::class, 'local' => 'id', 'foreign' => 'challenge_id']
    ];
   

    public static function list()
    {
    	$all = static::find();
    	$list = [];
    	foreach ($all as $p) {
    		$list[$p->id] = $p->name;
    	}
    	return $list;
    }

    public static function findBySets(array $conditions = [], array $options = []): array
    {
        $t = static::$table;
        $q = "SELECT * FROM `{$t}` ORDER BY `setnr` DESC, `week` DESC";
        $result = static::db()->query($q);
        $all = [];
        foreach ($result as $row) {
            $subs = Submission::db()->query('SELECT COUNT(1) AS `count` FROM submissions WHERE challenge_id = ' . (int) $row['id']);
            $row['subs'] = $subs[0]['count'];
            $all[$row['id']] = new Challenge($row);
        }

        return $all;
    }
}
