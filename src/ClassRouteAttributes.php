<?php

namespace Evelution87\RouteAttributes;

use ReflectionClass;
use Evelution87\RouteAttributes\Attributes\Defaults;
use Evelution87\RouteAttributes\Attributes\Domain;
use Evelution87\RouteAttributes\Attributes\DomainFromConfig;
use Evelution87\RouteAttributes\Attributes\Group;
use Evelution87\RouteAttributes\Attributes\Middleware;
use Evelution87\RouteAttributes\Attributes\Prefix;
use Evelution87\RouteAttributes\Attributes\Resource;
use Evelution87\RouteAttributes\Attributes\RouteAttribute;
use Evelution87\RouteAttributes\Attributes\ScopeBindings;
use Evelution87\RouteAttributes\Attributes\Where;
use Evelution87\RouteAttributes\Attributes\WithTrashed;

class ClassRouteAttributes
{
    public function __construct(
        private ReflectionClass $class
    ) {
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function prefix(): ?string
    {
        /** @var Prefix $attribute */
        if (! $attribute = $this->getAttribute(Prefix::class)) {
            return null;
        }

        return $attribute->prefix;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function domain(): ?string
    {
        /** @var Domain $attribute */
        if (! $attribute = $this->getAttribute(Domain::class)) {
            return null;
        }

        return $attribute->domain;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function domainFromConfig(): ?string
    {
        /** @var DomainFromConfig $attribute */
        if (! $attribute = $this->getAttribute(DomainFromConfig::class)) {
            return null;
        }

        return config($attribute->domain);
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function groups(): array
    {
        $groups = [];

        /** @var ReflectionClass[] $attributes */
        $attributes = $this->class->getAttributes(Group::class, \ReflectionAttribute::IS_INSTANCEOF);
        if (count($attributes) > 0) {
            foreach ($attributes as $attribute) {
                $attributeClass = $attribute->newInstance();
                $groups[] = array_filter([
                    'domain' => $attributeClass->domain,
                    'prefix' => $attributeClass->prefix,
                    'where' => $attributeClass->where,
                    'as' => $attributeClass->as,
                ]);
            }
        } else {
            $groups[] = array_filter([
                'domain' => $this->domainFromConfig() ?? $this->domain(),
                'prefix' => $this->prefix(),
            ]);
        }

        return $groups;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function resource(): ?string
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->resource;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function parameters(): array | string | null
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->parameters;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function shallow(): bool | null
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->shallow;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function apiResource(): ?string
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->apiResource;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function except(): string | array | null
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->except;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function only(): string | array | null
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->only;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function names(): string | array | null
    {
        /** @var Resource $attribute */
        if (! $attribute = $this->getAttribute(Resource::class)) {
            return null;
        }

        return $attribute->names;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function middleware(): array
    {
        /** @var Middleware $attribute */
        if (! $attribute = $this->getAttribute(Middleware::class)) {
            return [];
        }

        return $attribute->middleware;
    }

    public function scopeBindings(): ?bool
    {
        /** @var ScopeBindings $attribute */
        if (! $attribute = $this->getAttribute(ScopeBindings::class)) {
            return config('route-attributes.scope-bindings');
        }

        return $attribute->scopeBindings;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function wheres(): array
    {
        $wheres = [];
        /** @var ReflectionClass[] $attributes */
        $attributes = $this->class->getAttributes(Where::class, \ReflectionAttribute::IS_INSTANCEOF);
        foreach ($attributes as $attribute) {
            $attributeClass = $attribute->newInstance();
            $wheres[$attributeClass->param] = $attributeClass->constraint;
        }

        return $wheres;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function defaults(): array
    {
        $defaults = [];
        /** @var ReflectionClass[] $attributes */
        $attributes = $this->class->getAttributes(Defaults::class, \ReflectionAttribute::IS_INSTANCEOF);

        foreach ($attributes as $attribute) {
            $attributeClass = $attribute->newInstance();
            $defaults[$attributeClass->key] = $attributeClass->value;
        }

        return $defaults;
    }

    /**
     * @psalm-suppress NoInterfaceProperties
     */
    public function withTrashed() : bool
    {
        /** @var ?WithTrashed $attribute */
        if (! $attribute = $this->getAttribute(WithTrashed::class)) {
            return false;
        }

        return $attribute->withTrashed;
    }

    protected function getAttribute(string $attributeClass): ?RouteAttribute
    {
        $attributes = $this->class->getAttributes($attributeClass, \ReflectionAttribute::IS_INSTANCEOF);

        if (! count($attributes)) {
            return null;
        }

        return $attributes[0]->newInstance();
    }
}
