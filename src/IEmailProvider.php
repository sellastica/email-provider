<?php
namespace Sellastica\EmailProvider;

interface IEmailProvider
{
	/**
	 * @return array
	 */
	function getLists(): array;

	/**
	 * @param $listId
	 * @param array $data
	 * @return array
	 */
	function addSubscriber($listId, array $data): array;
}