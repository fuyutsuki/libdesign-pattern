<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

/**
 * Trait Singleton
 * @package jp\mcbe\libdesign\pattern
 */
trait Singleton {

	/** @var static|null $instance */
	protected static ?self $instance;

	final public function __construct() {
		self::$instance = $this;
	}

	/**
	 * @return static|null
	 */
	final public static function getInstance(): ?self {
		return self::$instance ?? null;
	}

	final public static function removeInstance() {
		self::$instance = null;
	}

}