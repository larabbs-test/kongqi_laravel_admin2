<?php
// +----------------------------------------------------------------------
// | KQAdmin [ 基于Laravel后台快速开发后台 ]
// | 快速laravel后台管理系统，集成了，图片上传，多图上传，批量Excel导入，批量插入，修改，添加，搜索，权限管理RBAC,验证码，助你开发快人一步。
// +----------------------------------------------------------------------
// | Copyright (c) 2012~2019 www.haoxuekeji.cn All rights reserved.
// +----------------------------------------------------------------------
// | Laravel 原创视频教程，文档教程请关注 www.heibaiketang.com
// +----------------------------------------------------------------------
// | Author: kongqi <531833998@qq.com>`
// +----------------------------------------------------------------------

namespace App\Services;

class BootstrapUi implements Ui
{
    public $show;

    /**
     * 单个生成表单模板数据
     * @param $filed
     * @param $name
     * @param string $show
     * @param string $type
     * @param array $config
     * @return string
     */
    public function createOneFormInput($filed, $name, $show = '', $type = 'text', $config = [])
    {
        $data = [
            'field' => $filed,
            'type' => $type,
            'name' => $name,
            'on' => 0,
        ];
        $data = $data + $config;
        $data = [
            $data
        ];
        return $this->createFormInput($data, $show);
    }

    /**
     * 创建按钮
     * @param $data
     */
    public function createBtn($data)
    {
        $html_data = [];
        foreach ($data as $k => $v) {
            $v['class'] = $v['class'] ?? 'btn-primary';
            $v['id'] = $v['id'] ?? '';
            $v['data'] = $v['data'] ?? [];

            $html_data[] = $this->btn(($v['name']), $v['class'], $v['data'], $v['id']);
        }
        return implode("", $html_data);
    }


    public function btn($name, $class, $data = [], $id = '')
    {

        $html = '';
        foreach ($data as $k => $v) {
            $html .= ' ' . $k . '=' . $v;
        }

        return '<button ' . $html . ' class="kongqi-handel btn ' . $class . '" id="' . $id . '">' . lang($name) . '</button>';
    }


    /**
     * 批量生成模板数据
     * @param $data
     * @param string $show
     * @return string
     */
    public function createFormInput($data, $show = '', $showBtn = 0)
    {

        $this->show = $show;

        $group_data = [];
        $is_group = 0;

        foreach ($data as $k => $item) {
            //判断是否存在组分类，如果是的话，需要切割哦
            if (isset($item['group_name'])) {
                $is_group = 1;
                if (!empty($item['data'])) {
                    $group_data[$k]['name'] = $item['group_name'];
                    foreach ($item['data'] as $k2 => $v) {
                        $group_data[$k]['data'][] = $this->createFormInputItem($v);
                    }
                }

            } else {
                $group_data[] = $this->createFormInputItem($item);;
            }

        }
        //存在分组
        if ($is_group) {

            $html = ' <div class="card "><div class="card-header">';
            $html .= ' <div class="nav nav-tabs  card-header-tabs"  role="tablist">';
            $content = '';
            foreach ($group_data as $k => $v) {
                $content .= '<div class="tab-pane fade ' . ($k == 0 ? 'show active' : '') . '" id="input-nav-' . $k . '" >' . (implode("", $v['data'])) . '</div>';
                $html .= '<a class="nav-item nav-link ' . ($k == 0 ? ' active' : '') . '" id="nav-home-tab" data-toggle="tab" href="#input-nav-' . $k . '">' . lang($v['name']) . '</a>';
            }

            $html .= '</div> </div>';

            $html .= '<div class="card-body"><div class="tab-content" id="nav-tabContent">';

            $html .= $content;

            $html .= '</div>';
            $html .= '<div class="form-group mt-4 ' . ($showBtn == 1 ? '' : 'd-none') . '"><button class="btn  btn-primary" type="button" lay-submit lay-filter="LAY-form-submit" id="LAY-form-submit">' . lang('提交') . '</button></div>';

            $html .= '</div></div>';

        } else {
            $html = implode("", $group_data);
            $html .= '<div class="form-group ' . ($showBtn == 1 ? '' : 'd-none') . '"><button class="btn  btn-primary" type="button" lay-submit lay-filter="LAY-form-submit" id="LAY-form-submit">' . lang('提交') . '</button></div>';

        }

        return $html;
    }

    /**
     * 生成模板数据项目
     * @param $data
     * @param string $show
     * @return string
     */
    public function createFormInputItem($v)
    {
        if (isset($v['remove']) && $v['remove'] == 1) {
            return false;
        }

        //如果单独设置了，则传递单的
        if ($this->show) {
            if (!isset($v['value'])) {
                $v['value'] = $this->show[$v['field']] ?? '';
            }

        } else {
            $v['value'] = $v['value'] ?? ($v['default'] ?? '');
        }

        $html = '<div class="form-group">';

        switch ($v['type']) {
            case 'text':
            case 'email':
            case 'number':
                $html .= str_replace("\r\n", "", $this->input($v));
                break;
            case 'date':
            case 'datetime':
                $v['type'] = 'text';
                $v['attr'] = $v['attr'] ?? '';
                $v['attr'] = $v['attr'] . ' data-lang="' . env('lang') . '" ';
                $html .= str_replace("\r\n", "", $this->input($v));
                break;
            case 'hidden':
                $html .= str_replace("\r\n", "", $this->input($v, '0'));
                break;
            case 'select':
                $html .= str_replace("\r\n", "", $this->select($v));
                break;
            case 'textarea':
                $html .= str_replace("\r\n", "", $this->textarea($v));
                break;
            case 'radio':
                $html .= str_replace("\r\n", "", $this->radio($v));
                break;
            case 'checkbox':
                $html .= str_replace("\r\n", "", $this->checkbox($v));
                break;
            case 'editor':
                $html .= str_replace("\r\n", "", $this->textarea($v));
                break;
            case 'img':
                $html .= str_replace("\r\n", "", $this->thumb($v));
                break;
            case 'imgMore':
                $html .= str_replace("\r\n", "", $this->thumbMore($v));
                break;
            case 'icon':
                $html .= str_replace("\r\n", "", $this->icon($v));
                break;
            case 'color':
                $html .= str_replace("\r\n", "", $this->color($v));
                break;
        }
        $html .= '</div>';
        return $html;
    }


    /**
     * 搜索生成
     * @param $data
     * @return string
     */
    public function createFormSearchInput($data)
    {
        foreach ($data as $k => $v) {
            if (isset($v['remove']) && $v['remove'] == 1) {
                continue;
            }
            $html = '<div class="mr-2"><div class="input-group mb-2">';
            $html .= $this->label($v, 'search');
            $v['default'] = $v['default'] ?? '';
            $v['value'] = $v['value'] ?? $v['default'];

            switch ($v['type']) {
                case 'text':
                case 'date':
                case 'email':
                case 'number':
                    $html .= str_replace("\r\n", "", $this->input($v, 0));
                    break;
                case 'select':
                    $html .= str_replace("\r\n", "", $this->select($v, 0));
                    break;
                case 'textarea':
                    $html .= str_replace("\r\n", "", $this->textarea($v, 0));
                    break;
                case 'radio':
                    $html .= str_replace("\r\n", "", $this->radio($v, 0));
                    break;
                case 'checkbox':
                    $html .= str_replace("\r\n", "", $this->checkbox($v, 0));
                    break;
            }
            $html .= '</div></div>';
            $html_data[] = $html;
        }
        return implode("", $html_data);
    }


    public function label($item, $labelType = '')
    {

        if ($labelType == 'search') {
            $html = '<div class="input-group-prepend"><label class="input-group-text" for="' . $item['field'] . '">' . lang($item['name']) . '</label></div>';
        } else {
            $html = '<label for="' . $item['field'] . '">' . lang($item['name']) . '</label>';
            if (isset($item['must']) && $item['must'] == 1) {
                $html .= '<span class="ml-1 text-danger">*</span>';
            }
            if (isset($item['mark']) && !empty($item['mark'])) {
                $item['mark'] = lang($item['mark']);
                $html .= '<span class="text-secondary pl-2">(' . $item['mark'] . ')<span>';
            }
        }

        return $html;
    }

    public function input($item, $hasLabel = 1, $class = "form-control")
    {


        $item['id'] = $item['id'] ?? $item['field'];
        $item['tips'] = $item['tips'] ?? '';

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $html .= '<input ' . ($item['attr'] ?? '') . ' 
        ui-event="' . ($item['event'] ?? '') . '" type="' . $item['type'] . '"  
        name="' . $item['field'] . '" 
        value="' . ($item['value'] ?? '') . '" 
        lay-verify="' . ($item['verify'] ?? '') . '" 
        class="' . $class . ' ' . ($item['addClass'] ?? '') . '" 
        id="input-' . ($item['id']) . '" 
        placeholder="' . lang($item['tips'] ?: $item['name']) . '">';
        return $html;
    }

    public function thumb($item, $hasLabel = 1, $class = "form-control")
    {

        $item['id'] = $item['id'] ?? '';
        $item['tips'] = $item['tips'] ?? '';
        $item['value_name'] = $item['value_name'] ?? 'path';

        $item['upload_url'] = $item['upload_url'] ?? '';//单独设置上传接口地址
        $item['file_type'] = $item['file_type'] ?? '';//上传文件类型
        $item['accept_type'] = $item['accept_type'] ?? '';//前端接受的文件上传类型，默认是images
        $item['group_id'] = $item['group_id'] ?? '';//分组ID
        $item['place_url'] = $item['place_url'] ?? '';//单独设置文件空间地址
        $up_attr = 'data-value_name=' . $item['value_name'];
        if ($item['upload_url']) {
            $up_attr .= ' data-upload_url=' . $item['upload_url'] . ' ';
        }
        if ($item['file_type']) {
            $up_attr .= ' data-file_type=' . $item['file_type'] . ' ';
        }
        if ($item['accept_type']) {
            $up_attr .= ' data-accept_type=' . $item['accept_type'] . ' ';
        }

        $place_attr = 'data-value_name=' . $item['value_name'];
        if ($item['place_url']) {
            $place_attr .= ' data-place_url=' . $item['place_url'] . ' ';
        }
        if ($item['file_type']) {
            $place_attr .= ' data-file_type=' . $item['file_type'] . ' ';
        }
        if ($item['group_id']) {
            $place_attr .= ' data-group_id=' . $item['group_id'] . ' ';
        }

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $item['type'] = 'hidden';
        $item['addClass'] = 'upload-area-input';
        $html .= ' <div class="upload-area " id="' . (md5($item['field'])) . '">
                    ' . $this->input($item, 0) . '
                    <img ui-event="showImg" 
                    class="img-fluid iupload-area-img-show mb-2 ' . ($item['value'] ?: 'd-none') . '" 
                    src="' . $item['value'] . '"
                    style="max-width: 11.5rem" src="" alt="">
                 
                    <div class="d-flex">
                        <a href="javascript:void(0)"  ' . $up_attr . ' 
                        data-event="upload" data-more="0" 
                       id="upload' . (md5($item['field'])) . '" 
                        data-target="#' . (md5($item['field'])) . '" 
                        class="btn btn-primary btn-sm  mr-2"> 
                        <i class="fas fa-upload fa-fw"></i> ' . lang('点击上传') . '</a>
                        <a href="javascript:void(0)" ' . $place_attr . ' class="btn btn-secondary btn-sm" data-more="0"  
                        data-event="uploadPlace" data-target="#' . (md5($item['field'])) . '">
                         <i class="fas fa fa-cloud"></i>
                          ' . lang('文件空间') . '</a>
                    </div>
                </div>';
        return $html;
    }

    public function icon($item, $hasLabel = 1, $class = "form-control")
    {
        $item['id'] = $item['id'] ?? '';
        $item['tips'] = $item['tips'] ?? '';

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $item['type'] = 'text';
        $item['addClass'] = 'upload-area-input';
        $html .= ' <div class="open-icon input-group" id="' . (md5($item['field'])) . '">
                    ' . $this->input($item, 0) . '
                    <div class="input-group-prepend">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm" data-more="0"  
                        data-event="iconPlace" data-target="#' . (md5($item['field'])) . '">
                         <i class="fas fa fa-cloud"></i>
                          ' . lang('选择图标') . '</a>
                   </div>
                    <div class="iupload-area-img-show mb-2 ml-2 text-secondary f16 w-100 ' . ($item['value'] ? '' : 'd-none') . '"><i class="' . $item['value'] . '"></i></div>
                </div>';
        return $html;
    }

    public function color($item, $hasLabel = 1, $class = "form-control")
    {
        $item['id'] = $item['id'] ?? $item['field'];
        $item['tips'] = $item['tips'] ?? '';

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $item['event'] = 'color';
        $item['type'] = 'text';
        $item['attr'] = $item['attr'] ?? '';
        $item['attr'] = $item['attr'] . ' data-obj="color-input-' . $item['id'] . '"';
        $html .= ' <div class="open-icon input-group" id="' . (md5($item['field'])) . '">
                    ' . $this->input($item, 0) . '
                    <div class="input-group-prepend">
                      <div class="color-warp" id="color-input-' . $item['id'] . '"></div>
                   </div>
                </div>';
        return $html;
    }

    public function thumbMore($item, $hasLabel = 1, $class = "form-control")
    {
        $item['value_name'] = $item['value_name'] ?? 'path';
        $item['id'] = $item['id'] ?? '';
        $item['tips'] = $item['tips'] ?? '';
        if ($this->show) {
            $item['value'] = $this->show[$item['field']] ?? '';
            $item['data'] = $item['value'] ? json_decode($item['value'], 1) : [];
        }
        $item['value'] = $item['value'] ?? '';

        $item['data'] = $item['data'] ?? [];

        $item['upload_url'] = $item['upload_url'] ?? '';//单独设置上传接口地址
        $item['file_type'] = $item['file_type'] ?? '';//上传文件类型
        $item['accept_type'] = $item['accept_type'] ?? '';//前端接受的文件上传类型，默认是images
        $item['group_id'] = $item['group_id'] ?? '';//分组ID
        $item['place_url'] = $item['place_url'] ?? '';//单独设置文件空间地址
        $up_attr = 'data-value_name=' . $item['value_name'];
        if ($item['upload_url']) {
            $up_attr .= ' data-upload_url=' . $item['upload_url'] . ' ';
        }
        if ($item['file_type']) {
            $up_attr .= ' data-file_type=' . $item['file_type'] . ' ';
        }
        if ($item['accept_type']) {
            $up_attr .= ' data-accept_type=' . $item['accept_type'] . ' ';
        }
        if ($item['group_id']) {
            $up_attr .= ' data-group_id=' . $item['group_id'] . ' ';
        }

        $place_attr = 'data-value_name=' . $item['value_name'];;
        if ($item['place_url']) {
            $place_attr .= ' data-place_url=' . $item['place_url'] . ' ';
        }
        if ($item['file_type']) {
            $place_attr .= ' data-file_type=' . $item['file_type'] . ' ';
        }
        if ($item['group_id']) {
            $place_attr .= ' data-group_id=' . $item['group_id'] . ' ';
        }

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $item['type'] = 'hidden';
        $item['addClass'] = 'upload-area-input';
        $html .= ' <div class="upload-area " style="">';

        $html .= '<div class=" upload-area-more bg-white pr-2 pt-2 pl-2 mb-2 border rounded ' . (empty($item['data']) ? 'd-none' : '') . '" 
        id="' . (md5($item['field'])) . '">';
        $html .= $this->input($item, 0);
        $html .= '<div class="row">';
        if (!empty($item['data'])) {
            foreach ($item['data'] as $k => $v) {
                $v['type'] = $v['type'] ?? '';
                $v['origin_path'] = $v['origin_path'] ?? '';
                $html .= '<div class="col-auto mb-2 upload-area-more-item"
                            data-tmp_name="' . ($v['tmp_name'] ?? '') . '"  data-ext="' . ($v['ext'] ?? '') . '"  data-oss_type="' . ($v['oss_type'] ?? '') . '"   
                            data-path="' . $v['path'] . '" data-view_src="' . ($v['view_src'] ?? '') . '" data-view data-origin_path="' . $v['origin_path'] . '" >
                            <div class="h6rem"><img class="img-fluid img-thumbnail maxH6rem" src="' . ($v['view_src'] ?? '') . '"  alt=""></div>
                            <div class="handle d-flex justify-content-center">
                                <button type="button" class="btn btn-sm js_left_pic" data-tips="tooltip" title="' . lang('左移') . '" >
                                <i class="fas fa fa-chevron-left"></i> </button>
                                <button type="button" class="btn btn-sm js_right_pic" data-tips="tooltip" title="' . lang('右移') . '"> 
                                <i class="fas fa fa-chevron-right"></i> </button>
                                 <button type="button" class="btn btn-sm js_remove_pic" data-tips="tooltip" title="' . lang('移除') . '" >
                                <i class="fas fa fa-trash"></i> </button>
                            </div>
                        </div>';
            }
        }

        $html .= '</div></div><div class="d-flex">
                        <a href="javascript:void(0)"  
                         id="upload' . (md5($item['field'])) . '"  
                        class="btn btn-primary btn-sm  mr-2"  ' . $up_attr . ' 
                        data-more="1"  data-event="upload" data-target="#' . (md5($item['field'])) . '">
                         <i class="fas fa-upload fa-fw"></i> ' . lang('点击上传') . '</a>
                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm" 
                        data-more="1"  ' . $place_attr . ' data-event="uploadPlace"
                         id="upload' . (md5($item['field'])) . '" 
                        data-target="#' . (md5($item['field'])) . '">
                         <i class="fas fa fa-cloud"></i>
                            ' . lang('文件空间') . '</a>
                    </div>
                </div>';
        return $html;
    }

    public function select($item, $hasLabel = 1, $class = "form-control")
    {
        //如果单独设置了，则传递单的
        $item['on'] = $item['on'] ?? '';
        $item['verify'] = $item['verify'] ?? '';
        $item['id'] = $item['id'] ?? $item['field'];
        $item['tips'] = $item['tips'] ?? '';
        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        if (isset($item['is_layui'])) {

            $item['is_layui'] = $item['attr']['is_layui'];
        } else {
            $item['is_layui'] = 0;
        }
        $ignore = 'lay-ignore ';
        if ($item['is_layui'] == 1) {
            $ignore = 'lay-search';
        }

        $html .= '<select  ' . $ignore . ' ' . ($item['attr'] ?? '') . ' class="' . $class . ' ' . ($item['addClass'] ?? '') . '"  
        name="' . $item['field'] . '"  
        id="input-' . $item['id'] . '" data-tips="' . lang($item['tips'] ?: $item['name']) . '" lay-verify="' . ($item['verify'] ?: '') . '"  
        lay-filter="' . ($item['filter'] ?? '') . '">';
        if (!empty($item['data'])) {
            foreach ($item['data'] as $k => $v) {
                $html .= '<option value="' . $v['id'] . '" ' . ($v['id'] == $item['value'] ? 'selected' : '') . '>' . lang($v['name']) . '</option>';
            }
        }
        $html .= '</select>';

        return $html;
    }

    public function textarea($item, $hasLabel = 1, $class = "form-control")
    {

        $item['tips'] = $item['tips'] ?? '';
        $item['id'] = $item['id'] ?? $item['field'];

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $html .= '<textarea ' . ($item['attr'] ?? '') . '  rows="' . ($item['rows'] ?? '5') . '"   
         name="' . $item['field'] . '"   
        lay-verify="' . ($item['verify'] ?? '') . '" 
        class="' . $class . ' ' . ($item['addClass'] ?? '') . '" 
        id="input-' . ($item['id']) . '" 
        placeholder="' . lang($item['tips'] ?: $item['name']) . '">' . $item['value'] . '</textarea>';
        return $html;
    }

    public function radio($item, $hasLabel = 1, $inline = "1")
    {

        $item['tips'] = $item['tips'] ?? $item['name'];
        $item['id'] = $item['id'] ?? $item['field'];
        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }

        $html .= '<div class="radio-tips form-control " id="' . $item['id'] . '" data-tips="' . lang($item['tips']) . '">';
        if (!empty($item['data'])) {
            foreach ($item['data'] as $k => $v) {
                $html .= '<div class="custom-control custom-radio ' . ($inline ? 'custom-control-inline' : '') . '">';
                $html .= '<input  ' . ($v['id'] == $item['value'] ? 'checked' : '') . '  value="' . $v['id'] . '" type="radio" id="' . ($item['field']) . $v['id'] . '" 
                 lay-verify="' . ($item['verify'] ?? '') . '" 
                 name="' . $item['field'] . '" class="custom-control-input">
                  <label class="custom-control-label" for="' . ($item['field']) . $v['id'] . '">' . lang($v['name']) . '</label>
                </div>';
            }
        }
        $html .= '</div>';

        return $html;
    }

    /**
     *
     * @param $item
     * @param int $hasLabel
     * @param string $inline
     * @return string
     */
    public function checkbox($item, $hasLabel = 1, $inline = "1")
    {
        $item['id'] = $item['id'] ?? $item['field'];
        $item['tips'] = $item['tips'] ?? $item['name'];
        if (!is_array($item['value'])) {
            $item['value'] = [];
        }

        $html = '';
        if ($hasLabel) {
            $html .= $this->label($item);
        }
        $html .= '<div><div class="radio-tips form-control "  id="' . $item['id'] . '" data-tips="' . lang($item['tips']) . '">';
        if (!empty($item['data'])) {
            foreach ($item['data'] as $k => $v) {

                $html .= '<div class="custom-control custom-checkbox ' . ($inline ? 'custom-control-inline' : '') . '">';
                $html .= '<input  ' . ($item['attr'] ?? '') . '  
                ' . (in_array($v['id'], $item['value']) ? 'checked' : '') . '
                 value="' . $v['id'] . '" type="checkbox" id="' . ($item['field']) . $v['id'] . '" 
                 lay-verify="' . ($item['verify'] ?? '') . '" 
                 placeholder="' . lang($item['tips']) . '" 
                 name="' . $item['field'] . '[]" class="custom-control-input">
                  <label class="custom-control-label" for="' . ($item['field']) . $v['id'] . '">' . lang($v['name']) . '</label>
                </div>';
            }
        }
        $html .= '</div></div>';

        return $html;
    }

    /**
     * 是否数组
     * @return array
     */
    public function trueFalseData($addAll = 0)
    {

        $data = [];
        if ($addAll) {
            $data[] = [
                'id' => '',
                'name' => '全部'
            ];
        }
        $data[] = [
            'id' => '1',
            'name' => '是'
        ];
        $data[] = [
            'id' => '0',
            'name' => '否'
        ];
        return $data;
    }

    public function allDataArr($name = '全部', $id = '')
    {
        $data[] = [
            'id' => $id,
            'name' => $name
        ];
        return $data;
    }

    /**
     * 合并成 id和name键值对
     * @param int $addAll
     * @param $modelData
     * @param string $allName
     * @param int $allId
     * @param array $fields
     * @return array
     */
    public function mergeModelData($addAll = 1, $modelData, $allName = '根级', $allId = 0, $fields = [])
    {
        $data = [

        ];
        if ($addAll) {
            $data[] = [
                'id' => $allId,
                'name' => $allName
            ];
        }

        if (empty($fields)) {
            $model_data = key_value_arr_to_select($modelData);
        } else {
            $model_data = array_to_key($modelData, 'id', $fields);
        }

        return array_merge($data, $model_data);

    }

    /**
     * 树形数据用于 select
     * @param $data
     * @param int $depth
     * @param string $id
     * @param string $name
     * @return array
     */
    public function treeData($data, $parentId = 0, $depth = 4, $id = 'id', $name = 'name')
    {
        $data = get_tree_option($data, $parentId);
        $ndata = [];
        foreach ($data as $k => $v) {
            $ndata[] = [
                'id' => $v[$id],
                'name' => str_repeat("-", $v['depth'] * $depth) . $v[$name]
            ];
        }

        return $ndata;
    }


}