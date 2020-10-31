<?php

declare(strict_types=1);

namespace jp\mcbe\libdesign\pattern;

/**
 * Trait StringArrayMultiton
 * @package jp\mcbe\libdesign\pattern
 */
trait StringArrayMultiton {

	/** @var self[] */
	protected static array $instances = [];

	final public function __construct(string $key) {
		self::$instances[$key] = $this;
	}

	final public static function getInstance(string $key): ?self {
		return self::$instances[$key] ?? null;
	}

}