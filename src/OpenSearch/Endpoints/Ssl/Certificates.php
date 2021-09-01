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

namespace OpenSearch\Endpoints\Ssl;

use OpenSearch\Endpoints\AbstractEndpoint;

/**
 * Class Certificates
 * Elasticsearch API name ssl.certificates
 *
 */
class Certificates extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_ssl/certificates";
    }

    public function getParamWhitelist(): array
    {
        return [

        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}