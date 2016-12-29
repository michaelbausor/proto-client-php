<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
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
namespace Google\Pubsub\V1 {

  // The service that an application uses to manipulate subscriptions and to
  // consume messages from a subscription via the `Pull` method.
  class SubscriberGrpc extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a subscription to a given topic.
     * If the subscription already exists, returns `ALREADY_EXISTS`.
     * If the corresponding topic doesn't exist, returns `NOT_FOUND`.
     *
     * If the name is not provided in the request, the server will assign a random
     * name for this subscription on the same project as the topic, conforming
     * to the
     * [resource name format](https://cloud.google.com/pubsub/docs/overview#names).
     * The generated name is populated in the returned Subscription object.
     * Note that for REST API requests, you must specify a name in the request.
     * @param \Google\Pubsub\V1\Subscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateSubscription(\Google\Pubsub\V1\Subscription $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/CreateSubscription',
      $argument,
      ['\Google\Pubsub\V1\Subscription', 'decode'],
      $metadata, $options);
    }

    /**
     * Gets the configuration details of a subscription.
     * @param \Google\Pubsub\V1\GetSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSubscription(\Google\Pubsub\V1\GetSubscriptionRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/GetSubscription',
      $argument,
      ['\Google\Pubsub\V1\Subscription', 'decode'],
      $metadata, $options);
    }

    /**
     * Lists matching subscriptions.
     * @param \Google\Pubsub\V1\ListSubscriptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSubscriptions(\Google\Pubsub\V1\ListSubscriptionsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/ListSubscriptions',
      $argument,
      ['\Google\Pubsub\V1\ListSubscriptionsResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Deletes an existing subscription. All messages retained in the subscription
     * are immediately dropped. Calls to `Pull` after deletion will return
     * `NOT_FOUND`. After a subscription is deleted, a new one may be created with
     * the same name, but the new one has no association with the old
     * subscription or its topic unless the same topic is specified.
     * @param \Google\Pubsub\V1\DeleteSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteSubscription(\Google\Pubsub\V1\DeleteSubscriptionRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/DeleteSubscription',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

    /**
     * Modifies the ack deadline for a specific message. This method is useful
     * to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted. Note that this does not modify the
     * subscription-level `ackDeadlineSeconds` used for subsequent messages.
     * @param \Google\Pubsub\V1\ModifyAckDeadlineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyAckDeadline(\Google\Pubsub\V1\ModifyAckDeadlineRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/ModifyAckDeadline',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

    /**
     * Acknowledges the messages associated with the `ack_ids` in the
     * `AcknowledgeRequest`. The Pub/Sub system can remove the relevant messages
     * from the subscription.
     *
     * Acknowledging a message whose ack deadline has expired may succeed,
     * but such a message may be redelivered later. Acknowledging a message more
     * than once will not result in an error.
     * @param \Google\Pubsub\V1\AcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Acknowledge(\Google\Pubsub\V1\AcknowledgeRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/Acknowledge',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

    /**
     * Pulls messages from the server. Returns an empty list if there are no
     * messages available in the backlog. The server may return `UNAVAILABLE` if
     * there are too many concurrent pull requests pending for the given
     * subscription.
     * @param \Google\Pubsub\V1\PullRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Pull(\Google\Pubsub\V1\PullRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/Pull',
      $argument,
      ['\Google\Pubsub\V1\PullResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * (EXPERIMENTAL) StreamingPull is an experimental feature. This RPC will
     * respond with UNIMPLEMENTED errors unless you have been invited to test
     * this feature. Contact cloud-pubsub@google.com with any questions.
     *
     * Establishes a stream with the server, which sends messages down to the
     * client. The client streams acknowledgements and ack deadline modifications
     * back to the server. The server will close the stream and return the status
     * on any error. The server may close the stream with status `OK` to reassign
     * server-side resources, in which case, the client should re-establish the
     * stream. `UNAVAILABLE` may also be returned in the case of a transient error
     * (e.g., a server restart). These should also be retried by the client. Flow
     * control can be achieved by configuring the underlying RPC channel.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StreamingPull($metadata = [], $options = []) {
      return $this->_bidiRequest('/google.pubsub.v1.Subscriber/StreamingPull',
      ['\Google\Pubsub\V1\StreamingPullResponse','decode'],
      $metadata, $options);
    }

    /**
     * Modifies the `PushConfig` for a specified subscription.
     *
     * This may be used to change a push subscription to a pull one (signified by
     * an empty `PushConfig`) or vice versa, or change the endpoint URL and other
     * attributes of a push subscription. Messages will accumulate for delivery
     * continuously through the call regardless of changes to the `PushConfig`.
     * @param \Google\Pubsub\V1\ModifyPushConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ModifyPushConfig(\Google\Pubsub\V1\ModifyPushConfigRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Subscriber/ModifyPushConfig',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

  }

  // The service that an application uses to manipulate topics, and to send
  // messages to a topic.
  class PublisherGrpc extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates the given topic with the given name.
     * @param \Google\Pubsub\V1\Topic $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTopic(\Google\Pubsub\V1\Topic $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Publisher/CreateTopic',
      $argument,
      ['\Google\Pubsub\V1\Topic', 'decode'],
      $metadata, $options);
    }

    /**
     * Adds one or more messages to the topic. Returns `NOT_FOUND` if the topic
     * does not exist. The message payload must not be empty; it must contain
     *  either a non-empty data field, or at least one attribute.
     * @param \Google\Pubsub\V1\PublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Publish(\Google\Pubsub\V1\PublishRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Publisher/Publish',
      $argument,
      ['\Google\Pubsub\V1\PublishResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Gets the configuration of a topic.
     * @param \Google\Pubsub\V1\GetTopicRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTopic(\Google\Pubsub\V1\GetTopicRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Publisher/GetTopic',
      $argument,
      ['\Google\Pubsub\V1\Topic', 'decode'],
      $metadata, $options);
    }

    /**
     * Lists matching topics.
     * @param \Google\Pubsub\V1\ListTopicsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTopics(\Google\Pubsub\V1\ListTopicsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Publisher/ListTopics',
      $argument,
      ['\Google\Pubsub\V1\ListTopicsResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Lists the name of the subscriptions for this topic.
     * @param \Google\Pubsub\V1\ListTopicSubscriptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTopicSubscriptions(\Google\Pubsub\V1\ListTopicSubscriptionsRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Publisher/ListTopicSubscriptions',
      $argument,
      ['\Google\Pubsub\V1\ListTopicSubscriptionsResponse', 'decode'],
      $metadata, $options);
    }

    /**
     * Deletes the topic with the given name. Returns `NOT_FOUND` if the topic
     * does not exist. After a topic is deleted, a new topic may be created with
     * the same name; this is an entirely new topic with none of the old
     * configuration or subscriptions. Existing subscriptions to this topic are
     * not deleted, but their `topic` field is set to `_deleted-topic_`.
     * @param \Google\Pubsub\V1\DeleteTopicRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteTopic(\Google\Pubsub\V1\DeleteTopicRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/google.pubsub.v1.Publisher/DeleteTopic',
      $argument,
      ['\Google\Protobuf\Empty', 'decode'],
      $metadata, $options);
    }

  }

}
