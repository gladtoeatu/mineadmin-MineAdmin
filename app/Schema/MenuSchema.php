<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace App\Schema;

use App\Model\Permission\Menu;
use Hyperf\Swagger\Annotation\Property;
use Hyperf\Swagger\Annotation\Schema;

#[Schema(title: 'MenuSchema')]
class MenuSchema implements \JsonSerializable
{
    #[Property(property: 'id', title: '主键', type: 'int')]
    public ?int $id;

    #[Property(property: 'parent_id', title: '父ID', type: 'int')]
    public ?int $parentId;

    #[Property(property: 'name', title: '菜单名称', type: 'string')]
    public ?string $name;

    #[Property(property: 'code', title: '菜单标识代码', type: 'string')]
    public ?string $code;

    #[Property(property: 'icon', title: '菜单图标', type: 'string')]
    public ?string $icon;

    #[Property(property: 'route', title: '路由地址', type: 'string')]
    public ?string $route;

    #[Property(property: 'component', title: '组件路径', type: 'string')]
    public ?string $component;

    #[Property(property: 'redirect', title: '重定向地址', type: 'string')]
    public ?string $redirect;

    #[Property(property: 'is_hidden', title: '是否隐藏 (1是 2否)', type: 'int')]
    public ?int $isHidden;

    #[Property(property: 'type', title: '菜单类型, (M菜单 B按钮 L链接 I iframe)', type: 'string')]
    public ?string $type;

    #[Property(property: 'status', title: '状态 (1正常 2停用)', type: 'int')]
    public ?int $status;

    #[Property(property: 'sort', title: '排序', type: 'int')]
    public ?int $sort;

    #[Property(property: 'created_by', title: '创建者', type: 'int')]
    public ?int $createdBy;

    #[Property(property: 'updated_by', title: '更新者', type: 'int')]
    public ?int $updatedBy;

    #[Property(property: 'created_at', title: '', type: 'string')]
    public mixed $createdAt;

    #[Property(property: 'updated_at', title: '', type: 'string')]
    public mixed $updatedAt;

    #[Property(property: 'deleted_at', title: '', type: 'string')]
    public mixed $deletedAt;

    #[Property(property: 'remark', title: '备注', type: 'string')]
    public ?string $remark;

    public function __construct(Menu $model)
    {
        $this->id = $model->id;
        $this->parentId = $model->parent_id;
        $this->name = $model->name;
        $this->code = $model->code;
        $this->icon = $model->icon;
        $this->route = $model->route;
        $this->component = $model->component;
        $this->redirect = $model->redirect;
        $this->isHidden = $model->is_hidden;
        $this->type = $model->type;
        $this->status = $model->status;
        $this->sort = $model->sort;
        $this->createdBy = $model->created_by;
        $this->updatedBy = $model->updated_by;
        $this->createdAt = $model->created_at;
        $this->updatedAt = $model->updated_at;
        $this->deletedAt = $model->deleted_at;
        $this->remark = $model->remark;
    }

    public function jsonSerialize(): mixed
    {
        return ['id' => $this->id, 'parent_id' => $this->parentId, 'name' => $this->name, 'code' => $this->code, 'icon' => $this->icon, 'route' => $this->route, 'component' => $this->component, 'redirect' => $this->redirect, 'is_hidden' => $this->isHidden, 'type' => $this->type, 'status' => $this->status, 'sort' => $this->sort, 'created_by' => $this->createdBy, 'updated_by' => $this->updatedBy, 'created_at' => $this->createdAt, 'updated_at' => $this->updatedAt, 'deleted_at' => $this->deletedAt, 'remark' => $this->remark];
    }
}
