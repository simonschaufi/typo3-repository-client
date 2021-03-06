<?php
namespace NamelessCoder\TYPO3RepositoryClient;

/**
 * Class Uploader
 */
class Uploader
{
    /**
     * @param string $directory
     * @param string $username
     * @param string $password
     * @param string $comment
     * @return array
     * @throws \SoapFault
     */
    public function upload($directory, $username, $password, $comment = null)
    {
        return $this->getConnection()->call(
            Connection::FUNCTION_UPLOAD,
            $this->getExtensionUploadPacker()->pack($directory, $username, $password, $comment),
            $username,
            $password
        );
    }

    /**
     * @return Connection
     */
    protected function getConnection()
    {
        return new Connection();
    }

    /**
     * @return ExtensionUploadPacker
     */
    protected function getExtensionUploadPacker()
    {
        return new ExtensionUploadPacker();
    }
}
