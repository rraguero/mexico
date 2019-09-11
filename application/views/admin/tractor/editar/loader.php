<?php
    $data['left_panel'] = $this->load->view('admin/v_left_panel', NULL, TRUE);
    $data['header'] = $this->load->view('v_header', NULL, TRUE);
    $data['footer'] = $this->load->view('v_footer', NULL, TRUE);
    $data['content'] = $this->load->view('admin/tractor/editar/v_content', NULL, TRUE);
    $data['dir'] = $this->load->view('admin/tractor/editar/v_dir', NULL, TRUE);
    $this->parser->parse('v_template', $data);