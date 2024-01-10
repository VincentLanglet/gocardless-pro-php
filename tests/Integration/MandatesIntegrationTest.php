<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class MandatesIntegrationTest extends IntegrationTestBase
{
    public function testResourceModelExists()
    {
        $obj = new \GoCardlessPro\Resources\Mandate(array());
        $this->assertNotNull($obj);
    }
    
    public function testMandatesCreate()
    {
        $fixture = $this->loadJsonFixture('mandates')->create;
        $this->stub_request($fixture);

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'create'), (array)$fixture->url_params);

        $body = $fixture->body->mandates;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $response);

        $this->assertEquals($body->authorisation_source, $response->authorisation_source);
        $this->assertEquals($body->consent_parameters, $response->consent_parameters);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->funds_settlement, $response->funds_settlement);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->next_possible_charge_date, $response->next_possible_charge_date);
        $this->assertEquals($body->next_possible_standard_ach_charge_date, $response->next_possible_standard_ach_charge_date);
        $this->assertEquals($body->payments_require_approval, $response->payments_require_approval);
        $this->assertEquals($body->reference, $response->reference);
        $this->assertEquals($body->scheme, $response->scheme);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->verified_at, $response->verified_at);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    public function testMandatesCreateWithIdempotencyConflict()
    {
        $fixture = $this->loadJsonFixture('mandates')->create;

        $idempotencyConflictResponseFixture = $this->loadFixture('idempotent_creation_conflict_invalid_state_error');

        // The POST request responds with a 409 to our original POST, due to an idempotency conflict
        $this->mock->append(new \GuzzleHttp\Psr7\Response(409, [], $idempotencyConflictResponseFixture));

        // The client makes a second request to fetch the resource that was already
        // created using our idempotency key. It responds with the created resource,
        // which looks just like the response for a successful POST request.
        $this->mock->append(new \GuzzleHttp\Psr7\Response(200, [], json_encode($fixture->body)));

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'create'), (array)$fixture->url_params);
        $body = $fixture->body->mandates;

        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $response);

        $this->assertEquals($body->authorisation_source, $response->authorisation_source);
        $this->assertEquals($body->consent_parameters, $response->consent_parameters);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->funds_settlement, $response->funds_settlement);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->next_possible_charge_date, $response->next_possible_charge_date);
        $this->assertEquals($body->next_possible_standard_ach_charge_date, $response->next_possible_standard_ach_charge_date);
        $this->assertEquals($body->payments_require_approval, $response->payments_require_approval);
        $this->assertEquals($body->reference, $response->reference);
        $this->assertEquals($body->scheme, $response->scheme);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->verified_at, $response->verified_at);
        

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $conflictRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $conflictRequest->getUri()->getPath());
        $getRequest = $this->history[1]['request'];
        $this->assertEquals($getRequest->getUri()->getPath(), '/mandates/ID123');
    }
    
    public function testMandatesList()
    {
        $fixture = $this->loadJsonFixture('mandates')->list;
        $this->stub_request($fixture);

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'list'), (array)$fixture->url_params);

        $body = $fixture->body->mandates;
    
        $records = $response->records;
        $this->assertInstanceOf('\GoCardlessPro\Core\ListResponse', $response);
        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $records[0]);
        if (!is_null($fixture->body) && property_exists($fixture->body, 'meta') && !is_null($fixture->body->meta)) {
            $this->assertEquals($fixture->body->meta->cursors->before, $response->before);
            $this->assertEquals($fixture->body->meta->cursors->after, $response->after);
        }
    

    
        foreach (range(0, count($body) - 1) as $num) {
            $record = $records[$num];
            
            if (isset($body[$num]->authorisation_source)) {
                $this->assertEquals($body[$num]->authorisation_source, $record->authorisation_source);
            }
            
            if (isset($body[$num]->consent_parameters)) {
                $this->assertEquals($body[$num]->consent_parameters, $record->consent_parameters);
            }
            
            if (isset($body[$num]->created_at)) {
                $this->assertEquals($body[$num]->created_at, $record->created_at);
            }
            
            if (isset($body[$num]->funds_settlement)) {
                $this->assertEquals($body[$num]->funds_settlement, $record->funds_settlement);
            }
            
            if (isset($body[$num]->id)) {
                $this->assertEquals($body[$num]->id, $record->id);
            }
            
            if (isset($body[$num]->links)) {
                $this->assertEquals($body[$num]->links, $record->links);
            }
            
            if (isset($body[$num]->metadata)) {
                $this->assertEquals($body[$num]->metadata, $record->metadata);
            }
            
            if (isset($body[$num]->next_possible_charge_date)) {
                $this->assertEquals($body[$num]->next_possible_charge_date, $record->next_possible_charge_date);
            }
            
            if (isset($body[$num]->next_possible_standard_ach_charge_date)) {
                $this->assertEquals($body[$num]->next_possible_standard_ach_charge_date, $record->next_possible_standard_ach_charge_date);
            }
            
            if (isset($body[$num]->payments_require_approval)) {
                $this->assertEquals($body[$num]->payments_require_approval, $record->payments_require_approval);
            }
            
            if (isset($body[$num]->reference)) {
                $this->assertEquals($body[$num]->reference, $record->reference);
            }
            
            if (isset($body[$num]->scheme)) {
                $this->assertEquals($body[$num]->scheme, $record->scheme);
            }
            
            if (isset($body[$num]->status)) {
                $this->assertEquals($body[$num]->status, $record->status);
            }
            
            if (isset($body[$num]->verified_at)) {
                $this->assertEquals($body[$num]->verified_at, $record->verified_at);
            }
            
        }

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testMandatesGet()
    {
        $fixture = $this->loadJsonFixture('mandates')->get;
        $this->stub_request($fixture);

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'get'), (array)$fixture->url_params);

        $body = $fixture->body->mandates;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $response);

        $this->assertEquals($body->authorisation_source, $response->authorisation_source);
        $this->assertEquals($body->consent_parameters, $response->consent_parameters);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->funds_settlement, $response->funds_settlement);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->next_possible_charge_date, $response->next_possible_charge_date);
        $this->assertEquals($body->next_possible_standard_ach_charge_date, $response->next_possible_standard_ach_charge_date);
        $this->assertEquals($body->payments_require_approval, $response->payments_require_approval);
        $this->assertEquals($body->reference, $response->reference);
        $this->assertEquals($body->scheme, $response->scheme);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->verified_at, $response->verified_at);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testMandatesUpdate()
    {
        $fixture = $this->loadJsonFixture('mandates')->update;
        $this->stub_request($fixture);

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'update'), (array)$fixture->url_params);

        $body = $fixture->body->mandates;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $response);

        $this->assertEquals($body->authorisation_source, $response->authorisation_source);
        $this->assertEquals($body->consent_parameters, $response->consent_parameters);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->funds_settlement, $response->funds_settlement);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->next_possible_charge_date, $response->next_possible_charge_date);
        $this->assertEquals($body->next_possible_standard_ach_charge_date, $response->next_possible_standard_ach_charge_date);
        $this->assertEquals($body->payments_require_approval, $response->payments_require_approval);
        $this->assertEquals($body->reference, $response->reference);
        $this->assertEquals($body->scheme, $response->scheme);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->verified_at, $response->verified_at);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testMandatesCancel()
    {
        $fixture = $this->loadJsonFixture('mandates')->cancel;
        $this->stub_request($fixture);

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'cancel'), (array)$fixture->url_params);

        $body = $fixture->body->mandates;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $response);

        $this->assertEquals($body->authorisation_source, $response->authorisation_source);
        $this->assertEquals($body->consent_parameters, $response->consent_parameters);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->funds_settlement, $response->funds_settlement);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->next_possible_charge_date, $response->next_possible_charge_date);
        $this->assertEquals($body->next_possible_standard_ach_charge_date, $response->next_possible_standard_ach_charge_date);
        $this->assertEquals($body->payments_require_approval, $response->payments_require_approval);
        $this->assertEquals($body->reference, $response->reference);
        $this->assertEquals($body->scheme, $response->scheme);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->verified_at, $response->verified_at);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
    public function testMandatesReinstate()
    {
        $fixture = $this->loadJsonFixture('mandates')->reinstate;
        $this->stub_request($fixture);

        $service = $this->client->mandates();
        $response = call_user_func_array(array($service, 'reinstate'), (array)$fixture->url_params);

        $body = $fixture->body->mandates;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Mandate', $response);

        $this->assertEquals($body->authorisation_source, $response->authorisation_source);
        $this->assertEquals($body->consent_parameters, $response->consent_parameters);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->funds_settlement, $response->funds_settlement);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->links, $response->links);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->next_possible_charge_date, $response->next_possible_charge_date);
        $this->assertEquals($body->next_possible_standard_ach_charge_date, $response->next_possible_standard_ach_charge_date);
        $this->assertEquals($body->payments_require_approval, $response->payments_require_approval);
        $this->assertEquals($body->reference, $response->reference);
        $this->assertEquals($body->scheme, $response->scheme);
        $this->assertEquals($body->status, $response->status);
        $this->assertEquals($body->verified_at, $response->verified_at);
    

        $expectedPathRegex = $this->extract_resource_fixture_path_regex($fixture);
        $dispatchedRequest = $this->history[0]['request'];
        $this->assertMatchesRegularExpression($expectedPathRegex, $dispatchedRequest->getUri()->getPath());
    }

    
}
