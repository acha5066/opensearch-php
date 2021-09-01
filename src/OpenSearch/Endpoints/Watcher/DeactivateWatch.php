<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Endpoints\Watcher;

use OpenSearch\Common\Exceptions\RuntimeException;
use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * Class DeactivateWatch
 * Elasticsearch API name watcher.deactivate_watch
 *
 */
class DeactivateWatch extends AbstractEndpoint
{
    protected $watch_id;

    public function getURI(): string
    {
        $watch_id = $this->watch_id ?? null;

        if (isset($watch_id)) {
            return "/_watcher/watch/$watch_id/_deactivate";
        }
        throw new RuntimeException('Missing parameter for the endpoint watcher.deactivate_watch');
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setWatchId($watch_id): DeactivateWatch
    {
        if (isset($watch_id) !== true) {
            return $this;
        }
        $this->watch_id = $watch_id;

        return $this;
    }
}