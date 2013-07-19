<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_created_at">
    <span class="hdr-120 block">
          <?php if ('created_at' == $sort[0]): ?>
            <?php echo link_to(__('Creado el', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
            <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
          <?php else: ?>
            <?php echo link_to(__('Creado el', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=created_at&sort_type=asc')) ?>
          <?php endif; ?>
    </span>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_resumename" style="width: 350px;">
    <span class="block" style="width: 350px;">
        <?php if ('name' == $sort[0]): ?>
            <?php echo link_to(__('Título', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
            <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
          <?php else: ?>
            <?php echo link_to(__('Título', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=name&sort_type=asc')) ?>
          <?php endif; ?>
    </span>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_concurso_tipo">
  <?php if ('concurso_tipo_id' == $sort[0]): ?>
        <?php echo link_to(__('Tipo de concurso', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=concurso_tipo_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
        <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
    <?php else: ?>
        <?php echo link_to(__('Tipo de concurso', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=concurso_tipo_id&sort_type=asc')) ?>
    <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_concurso_categoria" style="width: 350px;">
    <span class="block" style="width: 350px;">
     <?php if ('concurso_categoria_id' == $sort[0]): ?>
        <?php echo link_to(__('Categoría', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=concurso_categoria_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
        <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
     <?php else: ?>
        <?php echo link_to(__('Categoría', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=concurso_categoria_id&sort_type=asc')) ?>
     <?php endif; ?>
    </span>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_username" style="width: 176px;">
    <span class="block" style="width: 176px;">
      <?php if ('user_id' == $sort[0]): ?>
            <?php echo link_to(__('Usuario', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=user_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
            <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
      <?php else: ?>
            <?php echo link_to(__('Usuario', array(), 'messages'), '@concursos_pendientes', array('query_string' => 'sort=user_id&sort_type=asc')) ?>
      <?php endif; ?>
    </span>    
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_concurso_estado">
  <?php echo __('Estado', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>