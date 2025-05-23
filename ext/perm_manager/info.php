<?php

declare(strict_types=1);

namespace Shimmie2;

final class PermManagerInfo extends ExtensionInfo
{
    public const KEY = "perm_manager";

    public string $key = self::KEY;
    public string $name = "Custom User Classes (Database)";
    public string $url = self::SHIMMIE_URL;
    public array $authors = self::SHISH_AUTHOR;
    public string $license = self::LICENSE_GPLV2;
    public ExtensionVisibility $visibility = ExtensionVisibility::ADMIN;
    public ExtensionCategory $category = ExtensionCategory::ADMIN;
    public string $description = "A thing for point & click permission management";
    public ?string $documentation = "";
}
