<?php

declare(strict_types=1);

namespace App\Policies;

use App\User;
use App\Discount;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiscountPolicy
{
	use HandlesAuthorization;

	/**
	 * Determine whether the user can view any models.
	 */
	public function viewAny(User $user)
	{
		return $user->hasRole('Super Admin');
	}

	/**
	 * Determine whether the user can view the model.
	 */
	public function view(User $user, Discount $discount)
	{
		//
	}

	/**
	 * Determine whether the user can create models.
	 */
	public function create(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can update the model.
	 */
	public function update(User $user, Discount $discount)
	{
		//
	}

	/**
	 * Determine whether the user can delete the model.
	 */
	public function delete(User $user, Discount $discount)
	{
		//
	}

	/**
	 * Determine whether the user can restore the model.
	 */
	public function restore(User $user, Discount $discount)
	{
		//
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(User $user, Discount $discount)
	{
		//
	}
}
