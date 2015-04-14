<?php

/**
 * @file
 * Contains \Drupal\courier\Plugin\IdentityChannel\IdentityChannelPluginInterface.
 */

namespace Drupal\courier\Plugin\IdentityChannel;

use Drupal\courier\ChannelInterface;
use Drupal\Core\Entity\EntityInterface;

/**
 * Interface for IdentityChannel plugins.
 */
interface IdentityChannelPluginInterface {

  /**
   * Inserts the identity into the message.
   *
   * @param \Drupal\courier\ChannelInterface $message
   *   The message. Passed by reference.
   * @param EntityInterface $identity
   *   The identity.
   */
  public function applyIdentity(ChannelInterface &$message, EntityInterface $identity);

}
