<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Logging\V2;

/**
 * Service for configuring logs-based metrics.
 */
class MetricsServiceV2GrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists logs-based metrics.
     * @param \Google\Logging\V2\ListLogMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListLogMetrics(\Google\Logging\V2\ListLogMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.logging.v2.MetricsServiceV2/ListLogMetrics',
        $argument,
        ['\Google\Logging\V2\ListLogMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a logs-based metric.
     * @param \Google\Logging\V2\GetLogMetricRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetLogMetric(\Google\Logging\V2\GetLogMetricRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.logging.v2.MetricsServiceV2/GetLogMetric',
        $argument,
        ['\Google\Logging\V2\LogMetric', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a logs-based metric.
     * @param \Google\Logging\V2\CreateLogMetricRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateLogMetric(\Google\Logging\V2\CreateLogMetricRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.logging.v2.MetricsServiceV2/CreateLogMetric',
        $argument,
        ['\Google\Logging\V2\LogMetric', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates or updates a logs-based metric.
     * @param \Google\Logging\V2\UpdateLogMetricRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateLogMetric(\Google\Logging\V2\UpdateLogMetricRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.logging.v2.MetricsServiceV2/UpdateLogMetric',
        $argument,
        ['\Google\Logging\V2\LogMetric', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a logs-based metric.
     * @param \Google\Logging\V2\DeleteLogMetricRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteLogMetric(\Google\Logging\V2\DeleteLogMetricRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.logging.v2.MetricsServiceV2/DeleteLogMetric',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
