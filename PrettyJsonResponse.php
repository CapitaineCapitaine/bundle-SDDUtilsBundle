<?php
/**
 * @license   WTFPL (Do What the Fuck You Want to Public License)
 * @author    Daniel Bugl <daniel.bugl@touchlay.com>
 */

namespace SDD\UtilsBundle;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class PrettyJsonResponse: Pretty prints the Symfony JsonResponse, 100% compatible with JsonResponse
 * @package TouchLay\HelperBundle\Component
 */
class PrettyJsonResponse extends JsonResponse {
    /**
     * Sets the data to be sent as json.
     *
     * @param mixed $data
     *
     * @return JsonResponse
     */
    public function setData($data = array())
    {
        // Encode <, >, ', &, and " for RFC4627-compliant JSON, which may also be embedded into HTML.
        $this->data = json_encode($data, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT
                                       | JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT requires PHP >5.4.0

        return $this->update();
    }
}