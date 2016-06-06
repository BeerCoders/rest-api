<?php
/**
 * This file is part of the rest-api package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OAuthServerBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\{
    JsonResponse, Request
};

/**
 * Class AuthorizeController
 * @package OAuthServerBundle\Controller
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class TokenController extends \FOS\OAuthServerBundle\Controller\TokenController
{
    /**
     * @ApiDoc(
     *  resource=false,
     *  section="Authorization",
     *  description="Authorize end customers or refresh token",
     *  views = {"default"},
     *  parameters={
     *      {"name"="client_id", "dataType"="string", "required"=true, "description"="CLIENT_ID"},
     *      {"name"="client_secret", "dataType"="string", "required"=true, "description"="CLIENT_SECRET"},
     *      {"name"="grant_type", "dataType"="string", "required"=true, "description"="Grant type, pattern=(authorization_code|password|client_credentials|refresh_token|SERVER_HOST/grants/api_key)"},
     *      {"name"="code", "dataType"="string", "required"=false, "description"="CODE returned when authorize with Authorization Code"},
     *      {"name"="refresh_token", "dataType"="string", "required"=false, "description"="REFRESH_TOKEN"},
     *      {"name"="redirect_uri", "dataType"="string", "required"=false, "description"="CLIENT_HOST"},
     *      {"name"="password", "dataType"="string", "required"=false, "description"="USERNAME"},
     *      {"name"="username", "dataType"="string", "required"=false, "description"="PASSWORD"},
     *      {"name"="api_key", "dataType"="string", "required"=false, "description"="API_KEY"}
     *  }
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tokenAction(Request $request)
    {
        return parent::tokenAction($request);
    }
}
