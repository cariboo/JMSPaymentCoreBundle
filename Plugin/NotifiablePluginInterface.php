<?php

namespace JMS\Payment\CoreBundle\Plugin;

use JMS\Payment\CoreBundle\Model\CreditInterface;
use JMS\Payment\CoreBundle\Model\PaymentInstructionInterface;
use JMS\Payment\CoreBundle\Model\PaymentInterface;

/*
 * Copyright 2010 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * This interface can be implemented in addition to PluginInterface
 * if the plugin supports asynchronous notification queries from the billing system.
 *
 * @author Stephane Decleire <sdecleire@cariboo-networks.com>
 */
interface NotifiablePluginInterface extends PluginInterface
{
    /**
     * Instant Payment Notification (IPN) is an asynchronous message service that some billing systems
     * (Paypal, most of credit card systems) implement to notify you of events related to transactions.
     * You can use it to automate back-office and administrative functions, such as fulfilling orders,
     * tracking customers, and providing status and other information related to a transaction.
     *
     * @param array $parameters
     * @return void
     */
    function instantPaymentNotification(array $parameters);
}