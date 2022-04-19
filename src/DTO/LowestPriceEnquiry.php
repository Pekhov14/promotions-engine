<?php

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEnquiryInterface
{
    private ?int $productId;

    private ?int $quantity;

    private ?string $request_location;

    private ?string $voucher_code;

    private ?string $request_data;

    private ?int $price;

    private ?int $discounted_price;

    private ?int $promotion_id;

    private ?string $promotion_name;

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getRequestLocation(): ?string
    {
        return $this->request_location;
    }

    public function setRequestLocation(?string $request_location): void
    {
        $this->request_location = $request_location;
    }

    public function getVoucherCode(): ?string
    {
        return $this->voucher_code;
    }

    public function setVoucherCode(?string $voucher_code): void
    {
        $this->voucher_code = $voucher_code;
    }

    public function getRequestData(): ?string
    {
        return $this->request_data;
    }

    public function setRequestData(?string $request_data): void
    {
        $this->request_data = $request_data;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    public function getDiscountedPrice(): ?int
    {
        return $this->discounted_price;
    }

    public function setDiscountedPrice(?int $discounted_price): void
    {
        $this->discounted_price = $discounted_price;
    }

    public function getPromotionId(): ?int
    {
        return $this->promotion_id;
    }

    public function setPromotionId(?int $promotion_id): void
    {
        $this->promotion_id = $promotion_id;
    }

    public function getPromotionName(): ?string
    {
        return $this->promotion_name;
    }

    public function setPromotionName(?string $promotion_name): void
    {
        $this->promotion_name = $promotion_name;
    }
}