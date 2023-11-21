<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressStoreRequest;
use App\Http\Requests\AddressUpdateRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\JsonResponse;

class AddressController extends Controller
{
    public function index(): AddressResource
    {
        $adresses = Address::filter()->get();

        return new AddressResource($adresses);
    }

    public function store(AddressStoreRequest $request): JsonResponse
    {
        $address = Address::query()->create($request->validated());

        return response()
            ->json([
                'message' => 'Address created',
                'data' => new AddressResource($address),
            ]);
    }

    public function show(Address $address): AddressResource
    {
        return new AddressResource($address);
    }

    public function update(AddressUpdateRequest $request, Address $address): JsonResponse
    {
        $address->update($request->validated());

        return response()
            ->json([
                'message' => 'Address updated',
                'data' => new AddressResource($address),
            ]);
    }

    public function destroy(Address $address): JsonResponse
    {
        $address->delete();

        return response()
            ->json([
                'message' => 'Address deleted',
            ]);
    }
}
