<?php
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_1',
    'title' => 'home',
    'fields' => array (
      array (
        'key' => 'img-header',
        'label' => 'Imagem de cabeçalho',
        'name' => 'img-header',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'required' => 1
      ),
      // Container de seviços
      array (
        'key' => 'title-service',
        'label' => 'Título do container de serviços',
        'name' => 'title-service',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 80
      ),
      array (
        'key' => 'icon-service',
        'label' => 'Icone de serviço',
        'name' => 'icon-service',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'required' => 1
      ),
      array (
        'key' => 'icon-service-2',
        'label' => 'Icone de serviço 2',
        'name' => 'icon-service-2',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'required' => 1
      ),
      array (
        'key' => 'icon-service-3',
        'label' => 'Icone de serviço 3',
        'name' => 'icon-service-3',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'required' => 1
      ),
      array (
        'key' => 'icon-service-4',
        'label' => 'Icone de serviço 4',
        'name' => 'icon-service-4',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'required' => 1
      ),
      array (
        'key' => 'text-icon-service',
        'label' => 'Texto do icone de serviço',
        'name' => 'text-icon-service',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 80
      ),
      array (
        'key' => 'text-icon-service-2',
        'label' => 'Texto do icone de serviço 2',
        'name' => 'text-icon-service-2',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 80
      ),
      array (
        'key' => 'text-icon-service-3',
        'label' => 'Texto do icone de serviço 3',
        'name' => 'text-icon-service-3',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 80
      ),
      array (
        'key' => 'text-icon-service-4',
        'label' => 'Texto do icone de serviço 4',
        'name' => 'text-icon-service-4',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 80
      ),
      // Container de orçamento
      array (
        'key' => 'title-budget',
        'label' => 'Título do container de orçamento',
        'name' => 'title-budget',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 80
      ),
      array(
        'key' => 'text-budget',
        'label' => 'Texto do orçamento',
        'name' => 'text-budget',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
      ),
      // Container sobre
      array (
        'key' => 'title-about',
        'label' => 'Título do container de sobre',
        'name' => 'title-about',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 100
      ),
      array(
        'key' => 'text-about',
        'label' => 'Texto de sobre',
        'name' => 'text-about',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
      ),
      array (
        'key' => 'img-about',
        'label' => 'Imagem de sobre',
        'name' => 'img-about',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'required' => 1
      ),
      // Container contato
      array (
        'key' => 'title-contact',
        'label' => 'Título do container de contato',
        'name' => 'title-contact',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 100
      ),
      array (
        'key' => 'phone-contact',
        'label' => 'Telefone de contato',
        'name' => 'phone-contact',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 100
      ),
      array (
        'key' => 'whats-contact',
        'label' => 'Whatsapp de contato',
        'name' => 'whats-contact',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 100
      ),
      array (
        'key' => 'email-contact',
        'label' => 'Email de contato',
        'name' => 'email-contact',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 100
      ),
      array (
        'key' => 'address-contact',
        'label' => 'Endereço',
        'name' => 'address-contact',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 100
      ),
      array (
        'key' => 'maps-contact',
        'label' => 'Maps Link',
        'name' => 'maps-contact',
        'type' => 'text',
        'instructions' => 'Inserir link para maps',
        'maxlength' => 400,
      ),
      array(
        'key' => 'form-contact',
        'label' => 'Area do formulario de contato',
        'name' => 'form-contact',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'full',
        'instructions' => 'Insira o shortcode do formulario de contato',
        'media_upload' => 1,
      ),
      array(
        'key' => 'msg-whats',
        'label' => 'Mensagem para contato via whatsapp',
        'name' => 'msg-whats',
        'type' => 'text',
        'required' => 1,
        'maxlength' => 1000
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
    'style' => 'seamless'
  ));
}

