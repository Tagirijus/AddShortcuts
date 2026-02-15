<?php

namespace Kanboard\Plugin\TaskSelector\Helper;

use Kanboard\Core\Base;
use Kanboard\Model\TaskModel;
use Kanboard\Model\ProjectModel;


class TaskSelectorHelper extends Base
{
    /**
     * Render Javascript component
     *
     * @param  string $name
     * @param  array  $params
     * @return string
     */
    public function componentTaskSelector($name, array $params = array())
    {
        return '<div class="task-selector js-'.$name.'" data-params=\''.json_encode($params, JSON_HEX_APOS).'\'"></div>';
    }

    /**
     * Get last 10 modified tasks.
     *
     * @return array
     */
    public function get10LastTasks()
    {
        $out = [];
        $tasks = $this->db->table(TaskModel::TABLE)
            ->columns(
                TaskModel::TABLE.'.id',
                TaskModel::TABLE.'.title',
                ProjectModel::TABLE.'.name AS project_name'
            )
            ->join(ProjectModel::TABLE, 'id', 'project_id')
            ->eq(ProjectModel::TABLE.'.is_active', 1)
            ->eq(TaskModel::TABLE.'.is_active', 1)
            ->eq(TaskModel::TABLE.'.owner_id', $this->userSession->getId())->findAll();

        foreach ($tasks as $task) {
            $tmp_title = $task['project_name'] . ' > ' . $task['title'];
            $out[$task['id']] = $tmp_title;
        }

        return $out;
    }
}
