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

namespace OpenSearch\Endpoints\Cat;

use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * Class Nodes
 * Elasticsearch API name cat.nodes
 *
 */
class Nodes extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_cat/nodes";
    }

    public function getParamWhitelist(): array
    {
        return [
            'bytes',
            'format',
            'full_id',
            'local',
            'master_timeout',
            'h',
            'help',
            's',
            'time',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}