<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

/**
 * Trait IntArrayMultiton
 * @package jp\mcbe\libdesign\pattern
 */
trait IntArrayMultiton {

	/** @var static[] */
	protected static array $instances = [];

	final public function __construct(int $key) {
		static::$instances[$key] = $this;
	}

	/**
	 * @param int $key
	 * @return static|null
	 */
	final public static function getInstance(int $key): ?self {
		return static::$instances[$key] ?? null;
	}

	final public static function removeInstance(int $key) {
		unset(static::$instances[$key]);
	}

}