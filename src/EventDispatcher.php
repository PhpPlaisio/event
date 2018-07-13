<?php

namespace SetBased\Abc\Event;

/**
 * The event dispatcher.
 */
interface EventDispatcher
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Dispatches all queued events (as MAY be queued by notify()).
   */
  public function dispatch(): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Provide all listeners with an event to modify.
   *
   * @param Event $event The event to modify.
   *
   * @return Event The event that was passed, now modified by callers.
   */
  public function modify(Event $event): Event;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Notify listeners of an event.
   *
   * This method MAY act asynchronously. Callers SHOULD NOT assume that any action has been taken when this method
   * returns.
   *
   * @param Event $event The event to notify listeners of.
   *
   * @return void
   */
  public function notify(Event $event): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
