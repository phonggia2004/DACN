<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductReviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cho phép tất cả user, có thể thêm logic check login ở đây
    }

    public function rules(): array
    {
        return [
            'rating'  => 'required|integer|in:1,2,3,4,5',
            'content' => 'required|string|min:10',
        ];
    }

    public function messages(): array
    {
        return [
            'rating.required' => 'Điểm đánh giá không được bỏ trống.',
            'rating.integer'  => 'Điểm đánh giá phải là số nguyên.',
            'rating.in'       => 'Điểm đánh giá chỉ từ 1 đến 5.',
            'content.required'=> 'Nội dung đánh giá không được bỏ trống.',
            'content.string'  => 'Nội dung đánh giá phải là chuỗi ký tự.',
            'content.min'     => 'Nội dung đánh giá phải có ít nhất 10 ký tự.',
        ];
    }
}
