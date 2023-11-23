<?php

declare(strict_types=1);

/**
 * Copyright OpenSearch Contributors
 * SPDX-License-Identifier: Apache-2.0
 *
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

namespace OpenSearch\Namespaces;

use OpenSearch\Namespaces\AbstractNamespace;

/**
 * Class ConnectorsNamespace
 */
class MachineLearningNamespace extends AbstractNamespace {

  /**
   * $params['body']             = (string) The body of the request (Required)
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function createConnector(array $params = []): array
  {
    $body = $this->extractArgument($params, 'body');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\Connectors\CreateConnector');
    $endpoint->setParams($params);
    $endpoint->setBody($body);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['id']             = (string) The id of the connector (Required)
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function getConnector(array $params = []): array
  {
    $id = $this->extractArgument($params, 'id');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\Connectors\GetConnector');
    $endpoint->setParams($params);
    $endpoint->setId($id);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['body']             = (string) The body of the request
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function getConnectors(array $params = []): array
  {
    if (!isset($params['body'])) {
      $params['body'] = [
        'query' => [
          'match_all' => new \StdClass(),
        ],
        'size' => 1000,
      ];
    }
    $body = $this->extractArgument($params, 'body');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\Connectors\GetConnectors');
    $endpoint->setBody($body);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['id']             = (string) The id of the connector (Required)
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function deleteConnector(array $params = []): array
  {
    $id = $this->extractArgument($params, 'id');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\Connectors\DeleteConnector');
    $endpoint->setParams($params);
    $endpoint->setId($id);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['body']             = (string) The body of the request (Required)
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function registerModelGroup(array $params = []): array
  {
    $body = $this->extractArgument($params, 'body');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\ModelGroups\RegisterModelGroup');
    $endpoint->setParams($params);
    $endpoint->setBody($body);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['body']             = (string) The body of the request
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function getModelGroups(array $params = []): array
  {
    if (!isset($params['body'])) {
      $params['body'] = [
        'query' => [
          'match_all' => new \StdClass(),
        ],
        'size' => 1000,
      ];
    }
    $body = $this->extractArgument($params, 'body');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\ModelGroups\GetModelGroups');
    $endpoint->setBody($body);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['id']             = (string) The id of the model group (Required)
   * $params['body']           = (array) The body of the request (Required)
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function updateModelGroup(array $params = []): array
  {
    $id = $this->extractArgument($params, 'id');
    $body = $this->extractArgument($params, 'body');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\ModelGroups\UpdateModelGroup');
    $endpoint->setParams($params);
    $endpoint->setBody($body);
    $endpoint->setId($id);

    return $this->performRequest($endpoint);
  }

  /**
   * $params['id']             = (string) The id of the model group (Required)
   *
   * @param array $params Associative array of parameters
   *
   * @return array
   *   The response.
   */
  public function deleteModelGroup(array $params = []): array
  {
    $id = $this->extractArgument($params, 'id');
    $endpointBuilder = $this->endpoints;
    $endpoint = $endpointBuilder('MachineLearning\ModelGroups\DeleteModelGroup');
    $endpoint->setParams($params);
    $endpoint->setId($id);

    return $this->performRequest($endpoint);
  }

}
