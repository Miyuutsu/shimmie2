<?php

declare(strict_types=1);

namespace Shimmie2;

final class SourceHistoryConfig extends ConfigGroup
{
    public const KEY = "source_history";

    #[ConfigMeta("Max History", ConfigType::INT, default: -1, advanced: true)]
    public const MAX_HISTORY = "source_history_max_history";
}
