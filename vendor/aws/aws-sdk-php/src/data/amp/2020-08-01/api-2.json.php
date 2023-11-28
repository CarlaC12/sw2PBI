<?php
// This file was auto-generated from sdk-root/src/data/amp/2020-08-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-08-01', 'endpointPrefix' => 'aps', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Prometheus Service', 'serviceId' => 'amp', 'signatureVersion' => 'v4', 'signingName' => 'aps', 'uid' => 'amp-2020-08-01', ], 'operations' => [ 'CreateAlertManagerDefinition' => [ 'name' => 'CreateAlertManagerDefinition', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces/{workspaceId}/alertmanager/definition', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateAlertManagerDefinitionRequest', ], 'output' => [ 'shape' => 'CreateAlertManagerDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'CreateLoggingConfiguration' => [ 'name' => 'CreateLoggingConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces/{workspaceId}/logging', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateLoggingConfigurationRequest', ], 'output' => [ 'shape' => 'CreateLoggingConfigurationResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'CreateRuleGroupsNamespace' => [ 'name' => 'CreateRuleGroupsNamespace', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces/{workspaceId}/rulegroupsnamespaces', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateRuleGroupsNamespaceRequest', ], 'output' => [ 'shape' => 'CreateRuleGroupsNamespaceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'CreateWorkspace' => [ 'name' => 'CreateWorkspace', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateWorkspaceRequest', ], 'output' => [ 'shape' => 'CreateWorkspaceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'DeleteAlertManagerDefinition' => [ 'name' => 'DeleteAlertManagerDefinition', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/workspaces/{workspaceId}/alertmanager/definition', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteAlertManagerDefinitionRequest', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeleteLoggingConfiguration' => [ 'name' => 'DeleteLoggingConfiguration', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/workspaces/{workspaceId}/logging', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteLoggingConfigurationRequest', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeleteRuleGroupsNamespace' => [ 'name' => 'DeleteRuleGroupsNamespace', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/workspaces/{workspaceId}/rulegroupsnamespaces/{name}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteRuleGroupsNamespaceRequest', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeleteWorkspace' => [ 'name' => 'DeleteWorkspace', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/workspaces/{workspaceId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteWorkspaceRequest', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DescribeAlertManagerDefinition' => [ 'name' => 'DescribeAlertManagerDefinition', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}/alertmanager/definition', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeAlertManagerDefinitionRequest', ], 'output' => [ 'shape' => 'DescribeAlertManagerDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeLoggingConfiguration' => [ 'name' => 'DescribeLoggingConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}/logging', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeLoggingConfigurationRequest', ], 'output' => [ 'shape' => 'DescribeLoggingConfigurationResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeRuleGroupsNamespace' => [ 'name' => 'DescribeRuleGroupsNamespace', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}/rulegroupsnamespaces/{name}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeRuleGroupsNamespaceRequest', ], 'output' => [ 'shape' => 'DescribeRuleGroupsNamespaceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeWorkspace' => [ 'name' => 'DescribeWorkspace', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeWorkspaceRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListRuleGroupsNamespaces' => [ 'name' => 'ListRuleGroupsNamespaces', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}/rulegroupsnamespaces', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRuleGroupsNamespacesRequest', ], 'output' => [ 'shape' => 'ListRuleGroupsNamespacesResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListWorkspaces' => [ 'name' => 'ListWorkspaces', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListWorkspacesRequest', ], 'output' => [ 'shape' => 'ListWorkspacesResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'PutAlertManagerDefinition' => [ 'name' => 'PutAlertManagerDefinition', 'http' => [ 'method' => 'PUT', 'requestUri' => '/workspaces/{workspaceId}/alertmanager/definition', 'responseCode' => 202, ], 'input' => [ 'shape' => 'PutAlertManagerDefinitionRequest', ], 'output' => [ 'shape' => 'PutAlertManagerDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'PutRuleGroupsNamespace' => [ 'name' => 'PutRuleGroupsNamespace', 'http' => [ 'method' => 'PUT', 'requestUri' => '/workspaces/{workspaceId}/rulegroupsnamespaces/{name}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'PutRuleGroupsNamespaceRequest', ], 'output' => [ 'shape' => 'PutRuleGroupsNamespaceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'UpdateLoggingConfiguration' => [ 'name' => 'UpdateLoggingConfiguration', 'http' => [ 'method' => 'PUT', 'requestUri' => '/workspaces/{workspaceId}/logging', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateLoggingConfigurationRequest', ], 'output' => [ 'shape' => 'UpdateLoggingConfigurationResponse', ], 'errors' => [ [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'UpdateWorkspaceAlias' => [ 'name' => 'UpdateWorkspaceAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces/{workspaceId}/alias', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UpdateWorkspaceAliasRequest', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AlertManagerDefinitionData' => [ 'type' => 'blob', ], 'AlertManagerDefinitionDescription' => [ 'type' => 'structure', 'required' => [ 'createdAt', 'data', 'modifiedAt', 'status', ], 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'data' => [ 'shape' => 'AlertManagerDefinitionData', ], 'modifiedAt' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'AlertManagerDefinitionStatus', ], ], ], 'AlertManagerDefinitionStatus' => [ 'type' => 'structure', 'required' => [ 'statusCode', ], 'members' => [ 'statusCode' => [ 'shape' => 'AlertManagerDefinitionStatusCode', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'AlertManagerDefinitionStatusCode' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATION_FAILED', 'UPDATE_FAILED', ], ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateAlertManagerDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'data', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'data' => [ 'shape' => 'AlertManagerDefinitionData', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'CreateAlertManagerDefinitionResponse' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'AlertManagerDefinitionStatus', ], ], ], 'CreateLoggingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'logGroupArn', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'logGroupArn' => [ 'shape' => 'LogGroupArn', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'CreateLoggingConfigurationResponse' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'LoggingConfigurationStatus', ], ], ], 'CreateRuleGroupsNamespaceRequest' => [ 'type' => 'structure', 'required' => [ 'data', 'name', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'data' => [ 'shape' => 'RuleGroupsNamespaceData', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', ], 'tags' => [ 'shape' => 'TagMap', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'CreateRuleGroupsNamespaceResponse' => [ 'type' => 'structure', 'required' => [ 'arn', 'name', 'status', ], 'members' => [ 'arn' => [ 'shape' => 'RuleGroupsNamespaceArn', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', ], 'status' => [ 'shape' => 'RuleGroupsNamespaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateWorkspaceRequest' => [ 'type' => 'structure', 'members' => [ 'alias' => [ 'shape' => 'WorkspaceAlias', ], 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateWorkspaceResponse' => [ 'type' => 'structure', 'required' => [ 'arn', 'status', 'workspaceId', ], 'members' => [ 'arn' => [ 'shape' => 'WorkspaceArn', ], 'status' => [ 'shape' => 'WorkspaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'DeleteAlertManagerDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DeleteLoggingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DeleteRuleGroupsNamespaceRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', 'location' => 'uri', 'locationName' => 'name', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DeleteWorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeAlertManagerDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeAlertManagerDefinitionResponse' => [ 'type' => 'structure', 'required' => [ 'alertManagerDefinition', ], 'members' => [ 'alertManagerDefinition' => [ 'shape' => 'AlertManagerDefinitionDescription', ], ], ], 'DescribeLoggingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeLoggingConfigurationResponse' => [ 'type' => 'structure', 'required' => [ 'loggingConfiguration', ], 'members' => [ 'loggingConfiguration' => [ 'shape' => 'LoggingConfigurationMetadata', ], ], ], 'DescribeRuleGroupsNamespaceRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'workspaceId', ], 'members' => [ 'name' => [ 'shape' => 'RuleGroupsNamespaceName', 'location' => 'uri', 'locationName' => 'name', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeRuleGroupsNamespaceResponse' => [ 'type' => 'structure', 'required' => [ 'ruleGroupsNamespace', ], 'members' => [ 'ruleGroupsNamespace' => [ 'shape' => 'RuleGroupsNamespaceDescription', ], ], ], 'DescribeWorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeWorkspaceResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'IdempotencyToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[!-~]+', ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'ListRuleGroupsNamespacesRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'maxResults' => [ 'shape' => 'ListRuleGroupsNamespacesRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', 'location' => 'querystring', 'locationName' => 'name', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'ListRuleGroupsNamespacesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'ListRuleGroupsNamespacesResponse' => [ 'type' => 'structure', 'required' => [ 'ruleGroupsNamespaces', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'ruleGroupsNamespaces' => [ 'shape' => 'RuleGroupsNamespaceSummaryList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'ListWorkspacesRequest' => [ 'type' => 'structure', 'members' => [ 'alias' => [ 'shape' => 'WorkspaceAlias', 'location' => 'querystring', 'locationName' => 'alias', ], 'maxResults' => [ 'shape' => 'ListWorkspacesRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListWorkspacesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'ListWorkspacesResponse' => [ 'type' => 'structure', 'required' => [ 'workspaces', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'workspaces' => [ 'shape' => 'WorkspaceSummaryList', ], ], ], 'LogGroupArn' => [ 'type' => 'string', 'pattern' => '^arn:aws[a-z0-9-]*:logs:[a-z0-9-]+:\\d{12}:log-group:[A-Za-z0-9\\.\\-\\_\\#/]{1,512}\\:\\*$', ], 'LoggingConfigurationMetadata' => [ 'type' => 'structure', 'required' => [ 'createdAt', 'logGroupArn', 'modifiedAt', 'status', 'workspace', ], 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'logGroupArn' => [ 'shape' => 'LogGroupArn', ], 'modifiedAt' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'LoggingConfigurationStatus', ], 'workspace' => [ 'shape' => 'WorkspaceId', ], ], ], 'LoggingConfigurationStatus' => [ 'type' => 'structure', 'required' => [ 'statusCode', ], 'members' => [ 'statusCode' => [ 'shape' => 'LoggingConfigurationStatusCode', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'LoggingConfigurationStatusCode' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATION_FAILED', 'UPDATE_FAILED', ], ], 'PaginationToken' => [ 'type' => 'string', ], 'PutAlertManagerDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'data', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'data' => [ 'shape' => 'AlertManagerDefinitionData', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'PutAlertManagerDefinitionResponse' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'AlertManagerDefinitionStatus', ], ], ], 'PutRuleGroupsNamespaceRequest' => [ 'type' => 'structure', 'required' => [ 'data', 'name', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'data' => [ 'shape' => 'RuleGroupsNamespaceData', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', 'location' => 'uri', 'locationName' => 'name', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'PutRuleGroupsNamespaceResponse' => [ 'type' => 'structure', 'required' => [ 'arn', 'name', 'status', ], 'members' => [ 'arn' => [ 'shape' => 'RuleGroupsNamespaceArn', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', ], 'status' => [ 'shape' => 'RuleGroupsNamespaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'RuleGroupsNamespaceArn' => [ 'type' => 'string', ], 'RuleGroupsNamespaceData' => [ 'type' => 'blob', ], 'RuleGroupsNamespaceDescription' => [ 'type' => 'structure', 'required' => [ 'arn', 'createdAt', 'data', 'modifiedAt', 'name', 'status', ], 'members' => [ 'arn' => [ 'shape' => 'RuleGroupsNamespaceArn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'data' => [ 'shape' => 'RuleGroupsNamespaceData', ], 'modifiedAt' => [ 'shape' => 'Timestamp', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', ], 'status' => [ 'shape' => 'RuleGroupsNamespaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'RuleGroupsNamespaceName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[0-9A-Za-z][-.0-9A-Z_a-z]*', ], 'RuleGroupsNamespaceStatus' => [ 'type' => 'structure', 'required' => [ 'statusCode', ], 'members' => [ 'statusCode' => [ 'shape' => 'RuleGroupsNamespaceStatusCode', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'RuleGroupsNamespaceStatusCode' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATION_FAILED', 'UPDATE_FAILED', ], ], 'RuleGroupsNamespaceSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'createdAt', 'modifiedAt', 'name', 'status', ], 'members' => [ 'arn' => [ 'shape' => 'RuleGroupsNamespaceArn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'modifiedAt' => [ 'shape' => 'Timestamp', ], 'name' => [ 'shape' => 'RuleGroupsNamespaceName', ], 'status' => [ 'shape' => 'RuleGroupsNamespaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'RuleGroupsNamespaceSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RuleGroupsNamespaceSummary', ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', 'quotaCode', 'resourceId', 'resourceType', 'serviceCode', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'quotaCode' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], 'serviceCode' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'quotaCode' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], 'serviceCode' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => false, ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateLoggingConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'logGroupArn', 'workspaceId', ], 'members' => [ 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'logGroupArn' => [ 'shape' => 'LogGroupArn', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'UpdateLoggingConfigurationResponse' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'status' => [ 'shape' => 'LoggingConfigurationStatus', ], ], ], 'UpdateWorkspaceAliasRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'alias' => [ 'shape' => 'WorkspaceAlias', ], 'clientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'Uri' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', 'reason', ], 'members' => [ 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], 'message' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'message', 'name', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'UNKNOWN_OPERATION', 'CANNOT_PARSE', 'FIELD_VALIDATION_FAILED', 'OTHER', ], ], 'WorkspaceAlias' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'WorkspaceArn' => [ 'type' => 'string', ], 'WorkspaceDescription' => [ 'type' => 'structure', 'required' => [ 'arn', 'createdAt', 'status', 'workspaceId', ], 'members' => [ 'alias' => [ 'shape' => 'WorkspaceAlias', ], 'arn' => [ 'shape' => 'WorkspaceArn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'prometheusEndpoint' => [ 'shape' => 'Uri', ], 'status' => [ 'shape' => 'WorkspaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'WorkspaceId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[0-9A-Za-z][-.0-9A-Z_a-z]*', ], 'WorkspaceStatus' => [ 'type' => 'structure', 'required' => [ 'statusCode', ], 'members' => [ 'statusCode' => [ 'shape' => 'WorkspaceStatusCode', ], ], ], 'WorkspaceStatusCode' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATION_FAILED', ], ], 'WorkspaceSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'createdAt', 'status', 'workspaceId', ], 'members' => [ 'alias' => [ 'shape' => 'WorkspaceAlias', ], 'arn' => [ 'shape' => 'WorkspaceArn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'WorkspaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', ], ], ], 'WorkspaceSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceSummary', ], ], ],];
