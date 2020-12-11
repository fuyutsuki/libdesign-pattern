<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

/**
 * Trait StringArrayMultiton
 * @package jp\mcbe\libdesign\pattern
 */
trait StringArrayMultiton {

	/** @var static[] */
	protected static $instances = [];

	final public function __construct(string $key) {
		self::$instances[$key] = $this;
	}

	/**
	 * @param string $key
	 * @return static|null
	 */
	final public static function getInstance(string $key): ?self {
		return self::$instances[$key] ?? null;
	}

	final public static function removeInstance(string $key) {
		unset(self::$instances[$key]);
	}

}