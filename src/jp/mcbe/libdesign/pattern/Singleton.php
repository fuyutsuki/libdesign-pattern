<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

/**
 * Trait Singleton
 * @package jp\mcbe\libdesign\pattern
 */
trait Singleton {

	protected static self $instance;

	final public function __construct() {
		self::$instance = $this;
	}

	final public static function getInstance(): ?self {
		return self::$instance ?? null;
	}

}