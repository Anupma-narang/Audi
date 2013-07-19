<?php use_helper('I18N', 'Date') ?>
<?php include_partial('RewardLog/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva entrada en el Histórico', array(), 'messages') ?></h1>

  <?php include_partial('RewardLog/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('RewardLog/form_header', array('reward_log' => $reward_log, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('RewardLog/form', array('reward_log' => $reward_log, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('RewardLog/form_footer', array('reward_log' => $reward_log, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('input:submit').bind('click', function(){
      if(!$('#reward_log_cash').val() &&  !$('#reward_log_gift').val()){
        alert('<?php echo __('Necesitas introducir una cantidad asignada o un regalo.')?>');
        return false;
      }
    });

  });
</script>