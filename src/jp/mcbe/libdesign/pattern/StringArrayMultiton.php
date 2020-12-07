<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

/**
 * Trait StringArrayMultiton
 * @package jp\mcbe\libdesign\pattern
 */
trait StringArrayMultiton {

	/** @var static[] */
	protected static array $instances = [];

	final public function __construct(string $key) {
		static::$instances[$key] = $this;
	}

	/**
	 * @param string $key
	 * @return static|null
	 */
	final public static function getInstance(string $key): ?static {
		return static::$instances[$key] ?? null;
	}

}