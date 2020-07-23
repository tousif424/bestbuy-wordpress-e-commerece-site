<?php

// This file was auto-generated from sdk-root/src/data/eks/2017-11-01/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2017-11-01', 'endpointPrefix' => 'eks', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Amazon EKS', 'serviceFullName' => 'Amazon Elastic Kubernetes Service', 'serviceId' => 'EKS', 'signatureVersion' => 'v4', 'signingName' => 'eks', 'uid' => 'eks-2017-11-01'], 'operations' => ['CreateCluster' => ['name' => 'CreateCluster', 'http' => ['method' => 'POST', 'requestUri' => '/clusters'], 'input' => ['shape' => 'CreateClusterRequest'], 'output' => ['shape' => 'CreateClusterResponse'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'UnsupportedAvailabilityZoneException']]], 'CreateFargateProfile' => ['name' => 'CreateFargateProfile', 'http' => ['method' => 'POST', 'requestUri' => '/clusters/{name}/fargate-profiles'], 'input' => ['shape' => 'CreateFargateProfileRequest'], 'output' => ['shape' => 'CreateFargateProfileResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidRequestException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'UnsupportedAvailabilityZoneException']]], 'CreateNodegroup' => ['name' => 'CreateNodegroup', 'http' => ['method' => 'POST', 'requestUri' => '/clusters/{name}/node-groups'], 'input' => ['shape' => 'CreateNodegroupRequest'], 'output' => ['shape' => 'CreateNodegroupResponse'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'InvalidRequestException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException']]], 'DeleteCluster' => ['name' => 'DeleteCluster', 'http' => ['method' => 'DELETE', 'requestUri' => '/clusters/{name}'], 'input' => ['shape' => 'DeleteClusterRequest'], 'output' => ['shape' => 'DeleteClusterResponse'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException']]], 'DeleteFargateProfile' => ['name' => 'DeleteFargateProfile', 'http' => ['method' => 'DELETE', 'requestUri' => '/clusters/{name}/fargate-profiles/{fargateProfileName}'], 'input' => ['shape' => 'DeleteFargateProfileRequest'], 'output' => ['shape' => 'DeleteFargateProfileResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceNotFoundException']]], 'DeleteNodegroup' => ['name' => 'DeleteNodegroup', 'http' => ['method' => 'DELETE', 'requestUri' => '/clusters/{name}/node-groups/{nodegroupName}'], 'input' => ['shape' => 'DeleteNodegroupRequest'], 'output' => ['shape' => 'DeleteNodegroupResponse'], 'errors' => [['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException']]], 'DescribeCluster' => ['name' => 'DescribeCluster', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}'], 'input' => ['shape' => 'DescribeClusterRequest'], 'output' => ['shape' => 'DescribeClusterResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException']]], 'DescribeFargateProfile' => ['name' => 'DescribeFargateProfile', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}/fargate-profiles/{fargateProfileName}'], 'input' => ['shape' => 'DescribeFargateProfileRequest'], 'output' => ['shape' => 'DescribeFargateProfileResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceNotFoundException']]], 'DescribeNodegroup' => ['name' => 'DescribeNodegroup', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}/node-groups/{nodegroupName}'], 'input' => ['shape' => 'DescribeNodegroupRequest'], 'output' => ['shape' => 'DescribeNodegroupResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException']]], 'DescribeUpdate' => ['name' => 'DescribeUpdate', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}/updates/{updateId}'], 'input' => ['shape' => 'DescribeUpdateRequest'], 'output' => ['shape' => 'DescribeUpdateResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceNotFoundException']]], 'ListClusters' => ['name' => 'ListClusters', 'http' => ['method' => 'GET', 'requestUri' => '/clusters'], 'input' => ['shape' => 'ListClustersRequest'], 'output' => ['shape' => 'ListClustersResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException']]], 'ListFargateProfiles' => ['name' => 'ListFargateProfiles', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}/fargate-profiles'], 'input' => ['shape' => 'ListFargateProfilesRequest'], 'output' => ['shape' => 'ListFargateProfilesResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ClientException'], ['shape' => 'ServerException']]], 'ListNodegroups' => ['name' => 'ListNodegroups', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}/node-groups'], 'input' => ['shape' => 'ListNodegroupsRequest'], 'output' => ['shape' => 'ListNodegroupsResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'ResourceNotFoundException']]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'GET', 'requestUri' => '/tags/{resourceArn}'], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException']]], 'ListUpdates' => ['name' => 'ListUpdates', 'http' => ['method' => 'GET', 'requestUri' => '/clusters/{name}/updates'], 'input' => ['shape' => 'ListUpdatesRequest'], 'output' => ['shape' => 'ListUpdatesResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceNotFoundException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/tags/{resourceArn}'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException']]], 'UpdateClusterConfig' => ['name' => 'UpdateClusterConfig', 'http' => ['method' => 'POST', 'requestUri' => '/clusters/{name}/update-config'], 'input' => ['shape' => 'UpdateClusterConfigRequest'], 'output' => ['shape' => 'UpdateClusterConfigResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidRequestException']]], 'UpdateClusterVersion' => ['name' => 'UpdateClusterVersion', 'http' => ['method' => 'POST', 'requestUri' => '/clusters/{name}/updates'], 'input' => ['shape' => 'UpdateClusterVersionRequest'], 'output' => ['shape' => 'UpdateClusterVersionResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidRequestException']]], 'UpdateNodegroupConfig' => ['name' => 'UpdateNodegroupConfig', 'http' => ['method' => 'POST', 'requestUri' => '/clusters/{name}/node-groups/{nodegroupName}/update-config'], 'input' => ['shape' => 'UpdateNodegroupConfigRequest'], 'output' => ['shape' => 'UpdateNodegroupConfigResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidRequestException']]], 'UpdateNodegroupVersion' => ['name' => 'UpdateNodegroupVersion', 'http' => ['method' => 'POST', 'requestUri' => '/clusters/{name}/node-groups/{nodegroupName}/update-version'], 'input' => ['shape' => 'UpdateNodegroupVersionRequest'], 'output' => ['shape' => 'UpdateNodegroupVersionResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ClientException'], ['shape' => 'ServerException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidRequestException']]]], 'shapes' => ['AMITypes' => ['type' => 'string', 'enum' => ['AL2_x86_64', 'AL2_x86_64_GPU']], 'AutoScalingGroup' => ['type' => 'structure', 'members' => ['name' => ['shape' => 'String']]], 'AutoScalingGroupList' => ['type' => 'list', 'member' => ['shape' => 'AutoScalingGroup']], 'BadRequestException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'Boolean' => ['type' => 'boolean'], 'BoxedBoolean' => ['type' => 'boolean', 'box' => \true], 'BoxedInteger' => ['type' => 'integer', 'box' => \true], 'Capacity' => ['type' => 'integer', 'box' => \true, 'min' => 1], 'Certificate' => ['type' => 'structure', 'members' => ['data' => ['shape' => 'String']]], 'ClientException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'Cluster' => ['type' => 'structure', 'members' => ['name' => ['shape' => 'String'], 'arn' => ['shape' => 'String'], 'createdAt' => ['shape' => 'Timestamp'], 'version' => ['shape' => 'String'], 'endpoint' => ['shape' => 'String'], 'roleArn' => ['shape' => 'String'], 'resourcesVpcConfig' => ['shape' => 'VpcConfigResponse'], 'logging' => ['shape' => 'Logging'], 'identity' => ['shape' => 'Identity'], 'status' => ['shape' => 'ClusterStatus'], 'certificateAuthority' => ['shape' => 'Certificate'], 'clientRequestToken' => ['shape' => 'String'], 'platformVersion' => ['shape' => 'String'], 'tags' => ['shape' => 'TagMap'], 'encryptionConfig' => ['shape' => 'EncryptionConfigList']]], 'ClusterName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[0-9A-Za-z][A-Za-z0-9\\-_]*'], 'ClusterStatus' => ['type' => 'string', 'enum' => ['CREATING', 'ACTIVE', 'DELETING', 'FAILED', 'UPDATING']], 'CreateClusterRequest' => ['type' => 'structure', 'required' => ['name', 'roleArn', 'resourcesVpcConfig'], 'members' => ['name' => ['shape' => 'ClusterName'], 'version' => ['shape' => 'String'], 'roleArn' => ['shape' => 'String'], 'resourcesVpcConfig' => ['shape' => 'VpcConfigRequest'], 'logging' => ['shape' => 'Logging'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true], 'tags' => ['shape' => 'TagMap'], 'encryptionConfig' => ['shape' => 'EncryptionConfigList']]], 'CreateClusterResponse' => ['type' => 'structure', 'members' => ['cluster' => ['shape' => 'Cluster']]], 'CreateFargateProfileRequest' => ['type' => 'structure', 'required' => ['fargateProfileName', 'clusterName', 'podExecutionRoleArn'], 'members' => ['fargateProfileName' => ['shape' => 'String'], 'clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'podExecutionRoleArn' => ['shape' => 'String'], 'subnets' => ['shape' => 'StringList'], 'selectors' => ['shape' => 'FargateProfileSelectors'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true], 'tags' => ['shape' => 'TagMap']]], 'CreateFargateProfileResponse' => ['type' => 'structure', 'members' => ['fargateProfile' => ['shape' => 'FargateProfile']]], 'CreateNodegroupRequest' => ['type' => 'structure', 'required' => ['clusterName', 'nodegroupName', 'subnets', 'nodeRole'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'nodegroupName' => ['shape' => 'String'], 'scalingConfig' => ['shape' => 'NodegroupScalingConfig'], 'diskSize' => ['shape' => 'BoxedInteger'], 'subnets' => ['shape' => 'StringList'], 'instanceTypes' => ['shape' => 'StringList'], 'amiType' => ['shape' => 'AMITypes'], 'remoteAccess' => ['shape' => 'RemoteAccessConfig'], 'nodeRole' => ['shape' => 'String'], 'labels' => ['shape' => 'labelsMap'], 'tags' => ['shape' => 'TagMap'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true], 'version' => ['shape' => 'String'], 'releaseVersion' => ['shape' => 'String']]], 'CreateNodegroupResponse' => ['type' => 'structure', 'members' => ['nodegroup' => ['shape' => 'Nodegroup']]], 'DeleteClusterRequest' => ['type' => 'structure', 'required' => ['name'], 'members' => ['name' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name']]], 'DeleteClusterResponse' => ['type' => 'structure', 'members' => ['cluster' => ['shape' => 'Cluster']]], 'DeleteFargateProfileRequest' => ['type' => 'structure', 'required' => ['clusterName', 'fargateProfileName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'fargateProfileName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'fargateProfileName']]], 'DeleteFargateProfileResponse' => ['type' => 'structure', 'members' => ['fargateProfile' => ['shape' => 'FargateProfile']]], 'DeleteNodegroupRequest' => ['type' => 'structure', 'required' => ['clusterName', 'nodegroupName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'nodegroupName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'nodegroupName']]], 'DeleteNodegroupResponse' => ['type' => 'structure', 'members' => ['nodegroup' => ['shape' => 'Nodegroup']]], 'DescribeClusterRequest' => ['type' => 'structure', 'required' => ['name'], 'members' => ['name' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name']]], 'DescribeClusterResponse' => ['type' => 'structure', 'members' => ['cluster' => ['shape' => 'Cluster']]], 'DescribeFargateProfileRequest' => ['type' => 'structure', 'required' => ['clusterName', 'fargateProfileName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'fargateProfileName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'fargateProfileName']]], 'DescribeFargateProfileResponse' => ['type' => 'structure', 'members' => ['fargateProfile' => ['shape' => 'FargateProfile']]], 'DescribeNodegroupRequest' => ['type' => 'structure', 'required' => ['clusterName', 'nodegroupName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'nodegroupName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'nodegroupName']]], 'DescribeNodegroupResponse' => ['type' => 'structure', 'members' => ['nodegroup' => ['shape' => 'Nodegroup']]], 'DescribeUpdateRequest' => ['type' => 'structure', 'required' => ['name', 'updateId'], 'members' => ['name' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'updateId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'updateId'], 'nodegroupName' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nodegroupName']]], 'DescribeUpdateResponse' => ['type' => 'structure', 'members' => ['update' => ['shape' => 'Update']]], 'EncryptionConfig' => ['type' => 'structure', 'members' => ['resources' => ['shape' => 'StringList'], 'provider' => ['shape' => 'Provider']]], 'EncryptionConfigList' => ['type' => 'list', 'member' => ['shape' => 'EncryptionConfig'], 'max' => 1], 'ErrorCode' => ['type' => 'string', 'enum' => ['SubnetNotFound', 'SecurityGroupNotFound', 'EniLimitReached', 'IpNotAvailable', 'AccessDenied', 'OperationNotPermitted', 'VpcIdNotFound', 'Unknown', 'NodeCreationFailure', 'PodEvictionFailure', 'InsufficientFreeAddresses']], 'ErrorDetail' => ['type' => 'structure', 'members' => ['errorCode' => ['shape' => 'ErrorCode'], 'errorMessage' => ['shape' => 'String'], 'resourceIds' => ['shape' => 'StringList']]], 'ErrorDetails' => ['type' => 'list', 'member' => ['shape' => 'ErrorDetail']], 'FargateProfile' => ['type' => 'structure', 'members' => ['fargateProfileName' => ['shape' => 'String'], 'fargateProfileArn' => ['shape' => 'String'], 'clusterName' => ['shape' => 'String'], 'createdAt' => ['shape' => 'Timestamp'], 'podExecutionRoleArn' => ['shape' => 'String'], 'subnets' => ['shape' => 'StringList'], 'selectors' => ['shape' => 'FargateProfileSelectors'], 'status' => ['shape' => 'FargateProfileStatus'], 'tags' => ['shape' => 'TagMap']]], 'FargateProfileLabel' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'String']], 'FargateProfileSelector' => ['type' => 'structure', 'members' => ['namespace' => ['shape' => 'String'], 'labels' => ['shape' => 'FargateProfileLabel']]], 'FargateProfileSelectors' => ['type' => 'list', 'member' => ['shape' => 'FargateProfileSelector']], 'FargateProfileStatus' => ['type' => 'string', 'enum' => ['CREATING', 'ACTIVE', 'DELETING', 'CREATE_FAILED', 'DELETE_FAILED']], 'FargateProfilesRequestMaxResults' => ['type' => 'integer', 'box' => \true, 'max' => 100, 'min' => 1], 'Identity' => ['type' => 'structure', 'members' => ['oidc' => ['shape' => 'OIDC']]], 'InvalidParameterException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'fargateProfileName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'InvalidRequestException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'Issue' => ['type' => 'structure', 'members' => ['code' => ['shape' => 'NodegroupIssueCode'], 'message' => ['shape' => 'String'], 'resourceIds' => ['shape' => 'StringList']]], 'IssueList' => ['type' => 'list', 'member' => ['shape' => 'Issue']], 'ListClustersRequest' => ['type' => 'structure', 'members' => ['maxResults' => ['shape' => 'ListClustersRequestMaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListClustersRequestMaxResults' => ['type' => 'integer', 'box' => \true, 'max' => 100, 'min' => 1], 'ListClustersResponse' => ['type' => 'structure', 'members' => ['clusters' => ['shape' => 'StringList'], 'nextToken' => ['shape' => 'String']]], 'ListFargateProfilesRequest' => ['type' => 'structure', 'required' => ['clusterName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'maxResults' => ['shape' => 'FargateProfilesRequestMaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListFargateProfilesResponse' => ['type' => 'structure', 'members' => ['fargateProfileNames' => ['shape' => 'StringList'], 'nextToken' => ['shape' => 'String']]], 'ListNodegroupsRequest' => ['type' => 'structure', 'required' => ['clusterName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'maxResults' => ['shape' => 'ListNodegroupsRequestMaxResults', 'location' => 'querystring', 'locationName' => 'maxResults'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken']]], 'ListNodegroupsRequestMaxResults' => ['type' => 'integer', 'box' => \true, 'max' => 100, 'min' => 1], 'ListNodegroupsResponse' => ['type' => 'structure', 'members' => ['nodegroups' => ['shape' => 'StringList'], 'nextToken' => ['shape' => 'String']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['resourceArn'], 'members' => ['resourceArn' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn']]], 'ListTagsForResourceResponse' => ['type' => 'structure', 'members' => ['tags' => ['shape' => 'TagMap']]], 'ListUpdatesRequest' => ['type' => 'structure', 'required' => ['name'], 'members' => ['name' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'nodegroupName' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nodegroupName'], 'nextToken' => ['shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken'], 'maxResults' => ['shape' => 'ListUpdatesRequestMaxResults', 'location' => 'querystring', 'locationName' => 'maxResults']]], 'ListUpdatesRequestMaxResults' => ['type' => 'integer', 'box' => \true, 'max' => 100, 'min' => 1], 'ListUpdatesResponse' => ['type' => 'structure', 'members' => ['updateIds' => ['shape' => 'StringList'], 'nextToken' => ['shape' => 'String']]], 'LogSetup' => ['type' => 'structure', 'members' => ['types' => ['shape' => 'LogTypes'], 'enabled' => ['shape' => 'BoxedBoolean']]], 'LogSetups' => ['type' => 'list', 'member' => ['shape' => 'LogSetup']], 'LogType' => ['type' => 'string', 'enum' => ['api', 'audit', 'authenticator', 'controllerManager', 'scheduler']], 'LogTypes' => ['type' => 'list', 'member' => ['shape' => 'LogType']], 'Logging' => ['type' => 'structure', 'members' => ['clusterLogging' => ['shape' => 'LogSetups']]], 'Nodegroup' => ['type' => 'structure', 'members' => ['nodegroupName' => ['shape' => 'String'], 'nodegroupArn' => ['shape' => 'String'], 'clusterName' => ['shape' => 'String'], 'version' => ['shape' => 'String'], 'releaseVersion' => ['shape' => 'String'], 'createdAt' => ['shape' => 'Timestamp'], 'modifiedAt' => ['shape' => 'Timestamp'], 'status' => ['shape' => 'NodegroupStatus'], 'scalingConfig' => ['shape' => 'NodegroupScalingConfig'], 'instanceTypes' => ['shape' => 'StringList'], 'subnets' => ['shape' => 'StringList'], 'remoteAccess' => ['shape' => 'RemoteAccessConfig'], 'amiType' => ['shape' => 'AMITypes'], 'nodeRole' => ['shape' => 'String'], 'labels' => ['shape' => 'labelsMap'], 'resources' => ['shape' => 'NodegroupResources'], 'diskSize' => ['shape' => 'BoxedInteger'], 'health' => ['shape' => 'NodegroupHealth'], 'tags' => ['shape' => 'TagMap']]], 'NodegroupHealth' => ['type' => 'structure', 'members' => ['issues' => ['shape' => 'IssueList']]], 'NodegroupIssueCode' => ['type' => 'string', 'enum' => ['AutoScalingGroupNotFound', 'AutoScalingGroupInvalidConfiguration', 'Ec2SecurityGroupNotFound', 'Ec2SecurityGroupDeletionFailure', 'Ec2LaunchTemplateNotFound', 'Ec2LaunchTemplateVersionMismatch', 'Ec2SubnetNotFound', 'IamInstanceProfileNotFound', 'IamNodeRoleNotFound', 'AsgInstanceLaunchFailures', 'InstanceLimitExceeded', 'InsufficientFreeAddresses', 'AccessDenied', 'InternalFailure']], 'NodegroupResources' => ['type' => 'structure', 'members' => ['autoScalingGroups' => ['shape' => 'AutoScalingGroupList'], 'remoteAccessSecurityGroup' => ['shape' => 'String']]], 'NodegroupScalingConfig' => ['type' => 'structure', 'members' => ['minSize' => ['shape' => 'Capacity'], 'maxSize' => ['shape' => 'Capacity'], 'desiredSize' => ['shape' => 'Capacity']]], 'NodegroupStatus' => ['type' => 'string', 'enum' => ['CREATING', 'ACTIVE', 'UPDATING', 'DELETING', 'CREATE_FAILED', 'DELETE_FAILED', 'DEGRADED']], 'NotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'OIDC' => ['type' => 'structure', 'members' => ['issuer' => ['shape' => 'String']]], 'Provider' => ['type' => 'structure', 'members' => ['keyArn' => ['shape' => 'String']]], 'RemoteAccessConfig' => ['type' => 'structure', 'members' => ['ec2SshKey' => ['shape' => 'String'], 'sourceSecurityGroups' => ['shape' => 'StringList']]], 'ResourceInUseException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'ResourceLimitExceededException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'fargateProfileName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'ServerException' => ['type' => 'structure', 'members' => ['clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'ServiceUnavailableException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 503], 'exception' => \true, 'fault' => \true], 'String' => ['type' => 'string'], 'StringList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey'], 'max' => 50, 'min' => 1], 'TagMap' => ['type' => 'map', 'key' => ['shape' => 'TagKey'], 'value' => ['shape' => 'TagValue'], 'max' => 50, 'min' => 1], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['resourceArn', 'tags'], 'members' => ['resourceArn' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn'], 'tags' => ['shape' => 'TagMap']]], 'TagResourceResponse' => ['type' => 'structure', 'members' => []], 'TagValue' => ['type' => 'string', 'max' => 256], 'Timestamp' => ['type' => 'timestamp'], 'UnsupportedAvailabilityZoneException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String'], 'clusterName' => ['shape' => 'String'], 'nodegroupName' => ['shape' => 'String'], 'validZones' => ['shape' => 'StringList']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['resourceArn', 'tagKeys'], 'members' => ['resourceArn' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn'], 'tagKeys' => ['shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys']]], 'UntagResourceResponse' => ['type' => 'structure', 'members' => []], 'Update' => ['type' => 'structure', 'members' => ['id' => ['shape' => 'String'], 'status' => ['shape' => 'UpdateStatus'], 'type' => ['shape' => 'UpdateType'], 'params' => ['shape' => 'UpdateParams'], 'createdAt' => ['shape' => 'Timestamp'], 'errors' => ['shape' => 'ErrorDetails']]], 'UpdateClusterConfigRequest' => ['type' => 'structure', 'required' => ['name'], 'members' => ['name' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'resourcesVpcConfig' => ['shape' => 'VpcConfigRequest'], 'logging' => ['shape' => 'Logging'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true]]], 'UpdateClusterConfigResponse' => ['type' => 'structure', 'members' => ['update' => ['shape' => 'Update']]], 'UpdateClusterVersionRequest' => ['type' => 'structure', 'required' => ['name', 'version'], 'members' => ['name' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'version' => ['shape' => 'String'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true]]], 'UpdateClusterVersionResponse' => ['type' => 'structure', 'members' => ['update' => ['shape' => 'Update']]], 'UpdateLabelsPayload' => ['type' => 'structure', 'members' => ['addOrUpdateLabels' => ['shape' => 'labelsMap'], 'removeLabels' => ['shape' => 'labelsKeyList']]], 'UpdateNodegroupConfigRequest' => ['type' => 'structure', 'required' => ['clusterName', 'nodegroupName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'nodegroupName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'nodegroupName'], 'labels' => ['shape' => 'UpdateLabelsPayload'], 'scalingConfig' => ['shape' => 'NodegroupScalingConfig'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true]]], 'UpdateNodegroupConfigResponse' => ['type' => 'structure', 'members' => ['update' => ['shape' => 'Update']]], 'UpdateNodegroupVersionRequest' => ['type' => 'structure', 'required' => ['clusterName', 'nodegroupName'], 'members' => ['clusterName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'name'], 'nodegroupName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'nodegroupName'], 'version' => ['shape' => 'String'], 'releaseVersion' => ['shape' => 'String'], 'force' => ['shape' => 'Boolean'], 'clientRequestToken' => ['shape' => 'String', 'idempotencyToken' => \true]]], 'UpdateNodegroupVersionResponse' => ['type' => 'structure', 'members' => ['update' => ['shape' => 'Update']]], 'UpdateParam' => ['type' => 'structure', 'members' => ['type' => ['shape' => 'UpdateParamType'], 'value' => ['shape' => 'String']]], 'UpdateParamType' => ['type' => 'string', 'enum' => ['Version', 'PlatformVersion', 'EndpointPrivateAccess', 'EndpointPublicAccess', 'ClusterLogging', 'DesiredSize', 'LabelsToAdd', 'LabelsToRemove', 'MaxSize', 'MinSize', 'ReleaseVersion', 'PublicAccessCidrs']], 'UpdateParams' => ['type' => 'list', 'member' => ['shape' => 'UpdateParam']], 'UpdateStatus' => ['type' => 'string', 'enum' => ['InProgress', 'Failed', 'Cancelled', 'Successful']], 'UpdateType' => ['type' => 'string', 'enum' => ['VersionUpdate', 'EndpointAccessUpdate', 'LoggingUpdate', 'ConfigUpdate']], 'VpcConfigRequest' => ['type' => 'structure', 'members' => ['subnetIds' => ['shape' => 'StringList'], 'securityGroupIds' => ['shape' => 'StringList'], 'endpointPublicAccess' => ['shape' => 'BoxedBoolean'], 'endpointPrivateAccess' => ['shape' => 'BoxedBoolean'], 'publicAccessCidrs' => ['shape' => 'StringList']]], 'VpcConfigResponse' => ['type' => 'structure', 'members' => ['subnetIds' => ['shape' => 'StringList'], 'securityGroupIds' => ['shape' => 'StringList'], 'clusterSecurityGroupId' => ['shape' => 'String'], 'vpcId' => ['shape' => 'String'], 'endpointPublicAccess' => ['shape' => 'Boolean'], 'endpointPrivateAccess' => ['shape' => 'Boolean'], 'publicAccessCidrs' => ['shape' => 'StringList']]], 'labelKey' => ['type' => 'string', 'max' => 63, 'min' => 1], 'labelValue' => ['type' => 'string', 'max' => 253, 'min' => 1], 'labelsKeyList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'labelsMap' => ['type' => 'map', 'key' => ['shape' => 'labelKey'], 'value' => ['shape' => 'labelValue']]]];
