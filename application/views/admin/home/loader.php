<?php
    $panel_data['active'] = 'inicio';
    $data['left_panel'] = $this->load->view('admin/v_left_panel', $panel_data, TRUE);
    $data['header'] = $this->load->view('v_header', NULL, TRUE);
//    $data['footer'] = $this->load->view('v_footer', NULL, TRUE);
    $data['content'] = $this->load->view('admin/home/v_content_admin', NULL, TRUE);
    $data['dir'] = $this->load->view('admin/home/v_dir', NULL, TRUE);
    $this->parser->parse('v_template', $data);