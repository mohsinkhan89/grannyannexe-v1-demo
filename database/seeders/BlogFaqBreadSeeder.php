<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class BlogFaqBreadSeeder extends Seeder
{
    public function run()
    {
        $dataType = DataType::firstOrNew(['slug' => 'blogfaqs']);
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blogfaqs',
                'display_name_singular' => 'Blog FAQ',
                'display_name_plural'   => 'Blog FAQs',
                'icon'                  => 'voyager-question',
                'model_name'            => 'App\\BlogFaq',
                'policy_name'           => null,
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $rows = [
            'id' => ['type' => 'number', 'display_name' => 'ID', 'required' => 1, 'browse' => 0, 'read' => 0, 'edit' => 0, 'add' => 0, 'delete' => 0, 'order' => 1],
            'blog_id' => ['type' => 'text', 'display_name' => 'Blog', 'required' => 1, 'browse' => 1, 'read' => 1, 'edit' => 1, 'add' => 1, 'delete' => 1, 'order' => 2],
            'question' => ['type' => 'text', 'display_name' => 'Question', 'required' => 1, 'browse' => 1, 'read' => 1, 'edit' => 1, 'add' => 1, 'delete' => 1, 'order' => 3],
            'answer' => ['type' => 'rich_text_box', 'display_name' => 'Answer', 'required' => 1, 'browse' => 0, 'read' => 1, 'edit' => 1, 'add' => 1, 'delete' => 1, 'order' => 4],
            'order' => ['type' => 'number', 'display_name' => 'Order', 'required' => 0, 'browse' => 1, 'read' => 1, 'edit' => 1, 'add' => 1, 'delete' => 1, 'order' => 5],
            'status' => ['type' => 'checkbox', 'display_name' => 'Status', 'required' => 0, 'browse' => 1, 'read' => 1, 'edit' => 1, 'add' => 1, 'delete' => 1, 'order' => 6, 'details' => ['on' => 'Active', 'off' => 'Inactive', 'checked' => true]],
            'created_at' => ['type' => 'timestamp', 'display_name' => 'Created At', 'required' => 0, 'browse' => 1, 'read' => 1, 'edit' => 0, 'add' => 0, 'delete' => 0, 'order' => 7],
            'updated_at' => ['type' => 'timestamp', 'display_name' => 'Updated At', 'required' => 0, 'browse' => 0, 'read' => 0, 'edit' => 0, 'add' => 0, 'delete' => 0, 'order' => 8],
            'blogfaq_belongsto_blog_relationship' => [
                'type' => 'relationship',
                'display_name' => 'Blog',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'order' => 9,
                'details' => [
                    'model' => 'App\\Blog',
                    'table' => 'blogs',
                    'type' => 'belongsTo',
                    'column' => 'blog_id',
                    'key' => 'id',
                    'label' => 'title',
                    'pivot_table' => 'blogfaqs',
                    'pivot' => 0,
                ],
            ],
        ];

        foreach ($rows as $field => $row) {
            DataRow::firstOrNew([
                'data_type_id' => $dataType->id,
                'field'        => $field,
            ])->fill($row)->save();
        }

        $menu = Menu::where('name', 'admin')->first();
        if ($menu) {
            MenuItem::firstOrCreate([
                'menu_id' => $menu->id,
                'title'   => 'Blog FAQs',
                'route'   => 'voyager.blogfaqs.index',
            ], [
                'url'        => '',
                'target'     => '_self',
                'icon_class' => 'voyager-question',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 15,
            ]);
        }

        Permission::generateFor('blogfaqs');

        $role = Role::where('name', 'admin')->first();
        if ($role) {
            $role->permissions()->syncWithoutDetaching(
                Permission::where('table_name', 'blogfaqs')->pluck('id')->all()
            );
        }
    }
}
