<?php

require_once dirname(__FILE__) . '/../lib/RewardLogGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/RewardLogGeneratorHelper.class.php';

/**
 * RewardLog actions.
 *
 * @package    symfony
 * @subpackage RewardLog
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RewardLogActions extends autoRewardLogActions {

  public function executeUpdate(sfWebRequest $request) {
    $this->reward_log = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->reward_log);

    if ($request->getMethod() == sfWebRequest::PUT) {
      $reward_log_parameters = $request->getParameter($this->form->getName());
      $reward_log_parameters['created_at'] = $this->reward_log->getCreatedAt();
      $this->form->bind($reward_log_parameters);

      if ($this->form->isValid()) {
        $cash_amount = $reward_log_parameters['cash'];
        $cash_amount = str_replace('.', '', $cash_amount);
        $cash_amount = str_replace(',', '.', $cash_amount);
        $this->form->setValidator('cash', new sfValidatorString(array()));
        $reward_log_parameters['cash'] = $cash_amount;
        $this->form->bind($reward_log_parameters);
        if ($this->form->isValid()) {
          $this->form->save();
          $this->getUser()->setFlash('notice', 'The item was updated successfully.');

          $this->redirect('@reward_log');
        }
      }
    }

    $this->setTemplate('edit');
  }

  public function executeEdit(sfWebRequest $request) {
    $this->reward_log = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->reward_log);
    $cash = $this->getUser()->getMoneyInFormat($this->reward_log->getCash());
    $this->form->setDefault('cash', $cash);
  }

  public function executeCreate(sfWebRequest $request) {
    $this->form = $this->configuration->getForm();
    $this->reward_log = $this->form->getObject();

    if ($request->getMethod() == sfWebRequest::POST) {
      $reward_log_parameters = $request->getParameter($this->form->getName());
      $reward_log_parameters['created_at'] = date('Y-m-d H:i:s');
      $reward_log_parameters['updated_at'] = date('Y-m-d H:i:s');
      $this->form->bind($reward_log_parameters);

      if ($this->form->isValid()) {
        $cash_amount = $reward_log_parameters['cash'];
        $cash_amount = str_replace('.', '', $cash_amount);
        $cash_amount = str_replace(',', '.', $cash_amount);
        $this->form->setValidator('cash', new sfValidatorString(array()));
        $reward_log_parameters['cash'] = $cash_amount;
        $this->form->bind($reward_log_parameters);
        if ($this->form->isValid()) {
          $this->form->save();
          $this->getUser()->setFlash('notice', 'The item was created successfully.');
          $this->redirect('@reward_log');
        }
      }
    }

    $this->setTemplate('new');
  }

}
