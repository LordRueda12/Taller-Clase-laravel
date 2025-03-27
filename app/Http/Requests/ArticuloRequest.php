<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen_destacada' => 'nullable|string|max:255',
            'autor' => 'required|string|max:255',
            'categoria_blog_id' => 'required|exists:categoria_blogs,id',
            'fecha_publicacion' => 'nullable|date',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'titulo.string' => 'El título debe ser un texto.',
            'titulo.max' => 'El título no puede superar los 255 caracteres.',

            'contenido.required' => 'El contenido es obligatorio.',
            'contenido.string' => 'El contenido debe ser un texto.',

            'imagen_destacada.string' => 'La imagen destacada debe ser una cadena de texto.',
            'imagen_destacada.max' => 'La imagen destacada no puede superar los 255 caracteres.',

            'autor.required' => 'El autor es obligatorio.',
            'autor.string' => 'El autor debe ser un texto.',
            'autor.max' => 'El autor no puede superar los 255 caracteres.',

            'categoria_blog_id.required' => 'La categoría del blog es obligatoria.',
            'categoria_blog_id.exists' => 'La categoría seleccionada no es válida.',

            'fecha_publicacion.date' => 'La fecha de publicación debe ser una fecha válida.',
        ];
    }
}
