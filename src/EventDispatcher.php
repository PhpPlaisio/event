<?php
declare(strict_types=1);

namespace Plaisio\Event;

/**
 * The event dispatcher.
 */
interface EventDispatcher
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dispatches all queued events (as MAY be queued by notify() or modify()).
   */
  public function dispatch(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Provide all listeners with an event to modify.
   *
   * @param object $event The event to modify.
   *
   * @return object The event that was passed, now modified by callers.
   */
  public function modify(object $event): object;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Notify listeners of an event.
   *
   * This method MAY act asynchronously. Callers SHOULD NOT assume that any action has been taken when this method
   * returns.
   *
   * @param object $event The event to notify listeners of.
   *
   * @return void
   */
  public function notify(object $event): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
